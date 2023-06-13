<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Registro.aspx.cs" Inherits="WTramites.Registro" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    <style type="text/css">
        .auto-style1 {
            width: 87px;
        }
        .auto-style2 {
            width: 100%;
            height: 97px;
        }
    </style>
</head>
<body>
    <form id="form1" runat="server">
        <div>
            <table class="auto-style2">
                <tr>
                    <td class="auto-style1">Usuario</td>
                    <td>
                        <asp:TextBox ID="TxtUsername" runat="server"></asp:TextBox>
                    </td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td class="auto-style1">Contraseña</td>
                    <td>
                        <asp:TextBox ID="TxtPassword" runat="server" TextMode="Password"></asp:TextBox>
                    </td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td class="auto-style1">email</td>
                    <td>
                        <asp:TextBox ID="TxtEmail" runat="server" TextMode="Email"></asp:TextBox>
                    </td>
                    <td>&nbsp;</td>
                </tr>
                   <tr>
                    <td class="auto-style1"></td>
                    <td>
                        <asp:Button ID="BtnRegister" runat="server" OnClick="BtnRegister_Click" Text="Registrar" />
                       </td>
                    <td>&nbsp;</td>
                </tr>
            </table>
        </div>
    </form>
</body>
</html>
