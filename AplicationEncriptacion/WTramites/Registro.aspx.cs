using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using DataAccess;

namespace WTramites
{
   
    public partial class Registro : System.Web.UI.Page
    {
        private Conexion conexion = new Conexion();
        private CUsers users = new CUsers();
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        protected void BtnRegister_Click(object sender, EventArgs e)
        {
        

            bool exito = users.registrarUsuario(TxtUsername.Text, TxtPassword.Text, TxtEmail.Text);

            if (exito)
            {
             
                Response.Redirect("PrincipalLogin.aspx");
               
            }
            else
            {
                // Error al registrar, mostrar mensaje o realizar otra acción
                Response.Write("El usuario ya se encuentra registrado en la base de datos.");
            }

        }
    }
}