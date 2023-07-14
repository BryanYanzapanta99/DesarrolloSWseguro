using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

//---------- proveedores de datos = acceso BASE DATOS ------------------
using System.Data;
using System.Data.SqlClient;


//---------- enlace de capas ------------------------------


namespace DataAccess
{
    public class CTipoTramite
    {
        
        //---------- atributos de la Clase --------------------
        Conexion cnn = new Conexion();
        SqlConnection sqc = new SqlConnection();

        //----------- metodos ---------------------------------
       

        public static SqlConnection conectar()
        {

            SqlConnection cn = new SqlConnection("Data Source=DESKTOP-S4BP8M6\\SQLEXPRESS;Initial Catalog=Automovil;Integrated Security=True; ");
            cn.Open();
            return cn;


        }
        //-------VMOS A UNIR LAS CAPAS Y ENLAZAR LA FUNCIONALIDAD OKI OKI OKI.......

        //--------- CRUD ASP.NET ----------------------------------
        //----------- guardar----------------------------------------
        public String guardarTipoTramite(Int32 vcodigo, String vmarca, String vprecio)
        {

            try
            {
                conectar();
                String cadenaSql = "INSERT INTO carro (id_carro, marca_carro, precio_carro) " +
                "values (" + vcodigo + ",'" + vmarca + "'," + "'" + vprecio + "' )";

                SqlCommand cmd = new SqlCommand(cadenaSql, conectar());

                cmd.ExecuteNonQuery();
                return " guardado satisfactoriamente";

            }
            catch (Exception ex)
            {
                return "no guardado : " + ex.Message;
            }
        }// fin metodo guardarTipoTramite
        //-------------------------------------------------------------
        //----------------- actualizar --------------------------------

      
        public String actualizarTipoTramite(Int32 vcodigo, String vmarca, String vprecio)
        {

            try
            {
                conectar();

                //string cadenaSql = "update tblemp set name='" + txtname.Text + "', mno='" +
                //txtmno.Text + "'where empid='" + Session["id"] + "'";

                string cadenaSql = "update carro set marca_carro='" + vmarca + 
                    "', precio_carro ='" + vprecio + "'where id_carro=" + vcodigo;


                
                SqlCommand cmd =new SqlCommand(cadenaSql, conectar());

                cmd.ExecuteNonQuery();
                return " actualizado satisfactoriamente";
            }
            catch (Exception ex)
            {
                return "actualizado en revision : " + ex.Message;
            }
        }// fin metodo guardarTipoTramite
        //----------------------------------eliminar--------------------------

        public string eliminar(Int32 vcodigo)
        {
            String sql = "delete from carro where id_carro=" + vcodigo;
            try
            {
                cnn.conectar();
                SqlCommand cmd = new SqlCommand(sql, cnn.conectar());
                cmd.ExecuteNonQuery();
                return "Registro SI Eliminado : " + sql ;
            }
            catch(Exception ex)
            {
                return "NO ELIMINADO  : " + sql + " / msg :" + ex.Message;
            }
            
           
        }//---------------fin eliminar-----------------------------------
    }//--- fin clase
}  // --- fin namespace
