using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

//------------ Proveedores de Datos-----
using System.Data;
using System.Data.SqlClient;
using System.Data.OleDb;

namespace DataAccess
{
    public class Conexion
    {
        //------------atributos de la Clase-----------------
        //string cadena;


        string cadena = "Data Source=DESKTOP-S4BP8M6\\SQLEXPRESS;Initial Catalog=Automovil;Integrated Security=True; ";
        //-----------constructores ----------------------
        public Conexion()
        {
            string cadena = "Data Source=DESKTOP-S4BP8M6\\SQLEXPRESS;Initial Catalog=Automovil;Integrated Security=True; ";

        }

        //------------ metodos de la Clase------------------
        public  SqlConnection conectar()
        {
            // modo1:autenticacion basada en el modo del sistema operativo
            SqlConnection cn = new SqlConnection("Data Source=DESKTOP-S4BP8M6\\SQLEXPRESS;Initial Catalog=Automovil;Integrated Security=True; ");
            cn.Open();
            return cn;


        }
        public SqlConnection conectarSql()
        {
            // modo2: basado en usuario y clave propios del motor de base de datos SQLServer   
            SqlConnection cnn = new SqlConnection("Data Source=(local); Initial Catalog=Automovil; Integrated Security=true; ");
            cnn.Open();
            return cnn;


        }


    }

}
