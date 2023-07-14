using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

//----------enlace de capas -----------------------
//-------- desde la capa web enlazar con otras capas ------
using DataAccess;
using LogicaNegocio;
//------------referencias con la base de datos SQLServer -------
//---------- proveedores de datos = acceso BASE DATOS ------------------
using System.Data;
using System.Data.SqlClient;

namespace WTramites
{
    
    public partial class WTipoTramite : System.Web.UI.Page
    {
        //--------------atributos de la Clase --------------------
        private Conexion conexion = new Conexion();
        private CTipoTramite tipotramite = new CTipoTramite();
        private string  vtipotramite="tipo", vestado="activo";
        private Int32 vcodigo=0;

        //------------constructores --------------
        public WTipoTramite()
        {
            obtenerDatosFormulario();
        }
        //-----------metodos de la Clase------------------
        public void limpiarFormulario()
        {
            
        }
        public void obtenerDatosFormulario()
        {
            //vcodigo = Convert.ToInt32(txtCodigo.Text);
            //vtipotramite = txtTipoTramite.Text;
            //vestado = txtEstado.Text.ToString();
        }
            protected void Page_Load(object sender, EventArgs e)
        {

        }

        //-------------BOTON GUARDAR --------------------
        protected void btnGuardar_Click(object sender, EventArgs e)
        {
            
            
        }//--------- FIN BOTON GUARDAR--------

        //--------BOTON ACTUALIZAR --------------------
        protected void btnActualizar_Click(object sender, EventArgs e)
        {
          

        }//----- FIN BOTON ACTUALIZAR-----

        protected void btnEliminar_Click(object sender, EventArgs e)
        {
            
        }

        protected void btnBuscar_Click(object sender, EventArgs e)
        {
            
        }

        protected void btnGuardarSOAP_Click(object sender, EventArgs e)
        {

        }

        //--------BOTON llenarGrid -----------------------
        public void llenarGridTipoTramite()
        {
        }

    }
}