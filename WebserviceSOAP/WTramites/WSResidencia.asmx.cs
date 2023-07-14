using System;
using System.Collections.Generic;
using System.Data.SqlClient;
using System.Linq;
using System.Web;
using System.Web.Services;
using DataAccess;

namespace WTramites
{
    /// <summary>
    /// Descripción breve de WSResidencia
    /// </summary>
    [WebService(Namespace = "http://tempuri.org/")]
    [WebServiceBinding(ConformsTo = WsiProfiles.BasicProfile1_1)]
    [System.ComponentModel.ToolboxItem(false)]
    // Para permitir que se llame a este servicio web desde un script, usando ASP.NET AJAX, quite la marca de comentario de la línea siguiente. 
    // [System.Web.Script.Services.ScriptService]
    public class WSResidencia : System.Web.Services.WebService
    {

        [WebMethod]
        public string HelloWorld()
        {
            return "Hola a todos";
        }

        /*
        [WebMethod]
        public string conexion()
        {
            var builder = new SqlConnectionStringBuilder
            {
                DataSource = "SEBAS-PC\\SQLEXPRESS",
                InitialCatalog = "tramites",
                IntegratedSecurity = true
            };

            return builder.ConnectionString;
        }*/

        [WebMethod]
        public string buscarResidencia(string cedula)
        {
            try
            {
                string connectionString = ConnectionManager.GetConnectionString();
                using (SqlConnection connection = new SqlConnection(connectionString))
                {
                    string cadenaSql = "SELECT nombre,apellido,residencia FROM personas WHERE cedula=@cedula";

                    using (SqlCommand cmd = new SqlCommand(cadenaSql, connection))
                    {
                        cmd.Parameters.AddWithValue("@cedula", cedula);

                        connection.Open();

                        using (SqlDataReader reader = cmd.ExecuteReader())
                        {
                            if (reader.Read())
                            {
                                string nombre = reader["nombre"].ToString();
                                string apellido = reader["apellido"].ToString();
                                string residencia = reader["residencia"].ToString();

                                connection.Close();
                                return $"{nombre} {apellido} Su residencia para votar es en el sector de {residencia}";
                            }
                            else
                            {
                                connection.Close();
                                return "No se encontró ninguna persona con la cédula proporcionada.";
                            }
                        }
                    }
                }
            }
            catch (Exception ex)
            {
                return "Error: " + ex.Message;
            }
        }
    }
}
