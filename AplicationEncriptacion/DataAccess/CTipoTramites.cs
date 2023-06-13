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

            SqlConnection cn = new SqlConnection("SERVER=SEBAS-PC\\SQLEXPRESS; DATABASE=tramites; integrated security=true; ");
            cn.Open();
            return cn;


        }
        //-------VMOS A UNIR LAS CAPAS Y ENLAZAR LA FUNCIONALIDAD OKI OKI OKI.......

        //--------- CRUD ASP.NET ----------------------------------
        //----------- guardar----------------------------------------
        public String guardarTipoTramite(Int32 vcodigo, String vnombre, String vestado)
        {

            try
            {
                conectar();
                String cadenaSql = "INSERT INTO tipoTramite (id_tipoTramite, nombre_tipoTramite, estado_tipoTramite) " +
                "values (" + vcodigo + ",'" + vnombre + "'," + "'" + vestado + "' )";

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

      
        public String actualizarTipoTramite(Int32 vcodigo, String vnombre, String vestado)
        {

            try
            {
                conectar();

                //string cadenaSql = "update tblemp set name='" + txtname.Text + "', mno='" +
                //txtmno.Text + "'where empid='" + Session["id"] + "'";

                string cadenaSql = "update tipoTramite set nombre_tipoTramite='" + vnombre + 
                    "', estado_tipoTramite ='" + vestado + "'where id_tipoTramite=" + vcodigo;


                
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
            String sql = "delete from tipoTramite where id_tipoTramite=" + vcodigo;
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
