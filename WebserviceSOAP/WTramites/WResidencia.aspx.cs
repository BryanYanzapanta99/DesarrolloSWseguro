using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace WTramites
{
    public partial class WResidencia : System.Web.UI.Page
    {
        WSResidencia wsresidencia = new WSResidencia();
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        protected void btnResidencia_Click(object sender, EventArgs e)
        {
           txtResidenciaC.Text =  wsresidencia.buscarResidencia(txtCedula.Text);
        }
    }
}