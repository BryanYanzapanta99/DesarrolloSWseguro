using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data;
using System.Data.SqlClient;
using DataAccess;

namespace WTramites
{
    public partial class PrincipalLogin : System.Web.UI.Page
    {
        private Conexion conexion = new Conexion();
        private CUsers users = new CUsers();


        protected void Page_Load(object sender, EventArgs e)
        {
           ;
        }

        protected void BtnLogin_Click(object sender, EventArgs e)
        {

            bool esValido = users.validarUser(TxtUsername.Text, TxtPassword.Text);
            if(esValido){
                Response.Redirect("WTipoTramite.aspx");

            }
            else
            {
                Response.Write("Usuario Incorrecto");
            }
        }

        protected void BtnRegister_Click(object sender, EventArgs e)
        {


            Response.Redirect("Registro.aspx");
            
        }
    }
}