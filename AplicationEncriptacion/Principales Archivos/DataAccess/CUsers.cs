using System;
using System.Collections.Generic;
using System.Data.SqlClient;
using System.Linq;
using System.Net;
using System.Runtime.Remoting.Messaging;
using System.Text;
using System.Threading.Tasks;
using System.Security.Cryptography;
using System.Text;

namespace DataAccess
{
    public class CUsers
    {
        Conexion cnn = new Conexion();
        SqlConnection sqc = new SqlConnection();

        public static SqlConnection conectar()
        {

            SqlConnection cn = new SqlConnection("SERVER=SEBAS-PC\\SQLEXPRESS; DATABASE=tramites; integrated security=true; ");
            cn.Open();
            return cn;

        }

        public bool validarUser(string username, string password)
        {
            bool esValido = false;

            conectar();

            string hashedPassword = HashPassword(password);

            string sql = "SELECT * FROM Users WHERE username=@username AND password=@password";

            using (SqlCommand command = new SqlCommand(sql, conectar()))
            {
                command.Parameters.AddWithValue("@username", username);
                command.Parameters.AddWithValue("@password", hashedPassword);

                using (SqlDataReader reader = command.ExecuteReader())
                {
                    if (reader.HasRows)
                    {
                        // Usuario válido
                        esValido = true;
                    }
                    else
                    {
                        // Usuario inválido
                        esValido = false;
                    }
                }
            }

            return esValido;
        }


        public bool verificarExistenciaUsuario(string username)
        {
            conectar();

            string sql = "SELECT COUNT(*) FROM Users WHERE username = @username";

            using (SqlCommand command = new SqlCommand(sql, conectar()))
            {
                command.Parameters.AddWithValue("@username", username);

                int usuarioExistente = (int)command.ExecuteScalar();

                return usuarioExistente > 0;
            }
        }

        public bool registrarUsuario(string username, string password, string email)
        {
            bool exito = false;

            conectar();

            if (verificarExistenciaUsuario(username))
            {
                // El usuario ya existe, no se puede registrar nuevamente
                
                return false;
            }


            // Encriptar la contraseña
            string hashedPassword = HashPassword(password);

            string sql = "INSERT INTO Users (username, password, email) VALUES (@username, @password, @email)";

            using (SqlCommand command = new SqlCommand(sql, conectar()))
            {
                command.Parameters.AddWithValue("@username", username);
                command.Parameters.AddWithValue("@password", hashedPassword);
                command.Parameters.AddWithValue("@email", email);

                int rowsAffected = command.ExecuteNonQuery();

                if (rowsAffected > 0)
                {
                    // Registro exitoso
                    exito = true;
                }
                else
                {
                    // Error al registrar
                    exito = false;
                }
            }

            return exito;
        }

        private string HashPassword(string password)
        {
            using (SHA256Managed sha256 = new SHA256Managed())
            {
                byte[] bytes = Encoding.UTF8.GetBytes(password);
                byte[] hash = sha256.ComputeHash(bytes);
                return Convert.ToBase64String(hash);
            }
        }


    }
}
