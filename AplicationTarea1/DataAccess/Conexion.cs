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

        //-----------constructores ----------------------
        public Conexion()
        {
            string cadena = "SERVER=SEBAS-PC\\SQLEXPRESS; DATABASE=tramites; integrated security=true; ";

        }

        //------------ metodos de la Clase------------------
        public  SqlConnection conectar()
        {
            // modo1:autenticacion basada en el modo del sistema operativo
            SqlConnection cn = new SqlConnection("SERVER=SEBAS-PC\\SQLEXPRESS; DATABASE=tramites; integrated security=true; ");
            cn.Open();
            return cn;


        }
        public SqlConnection conectarSql()
        {
            // modo2: basado en usuario y clave propios del motor de base de datos SQLServer   
            SqlConnection cnn = new SqlConnection("Data Source=(local); Initial Catalog=tramites; Integrated Security=true; ");
            cnn.Open();
            return cnn;


        }


    }

}
