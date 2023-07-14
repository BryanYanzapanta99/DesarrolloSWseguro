<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="PrincipalLogin.aspx.cs" Inherits="WTramites.PrincipalLogin" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    <style type="text/css">
        .auto-style1 {
            width: 112px;
        }
        .auto-style2 {
            width: 112px;
            height: 23px;
        }
        .auto-style3 {
            height: 23px;
        }
        .auto-style4 {
            width: 136px;
        }
        .auto-style5 {
            height: 23px;
            width: 136px;
        }
    </style>
</head>
<body>
    <form id="form1" runat="server">
        <div>
            <table style="width:100%;">
                <tr>
                    <td class="auto-style1">Usuario</td>
                    <td class="auto-style4">
                        <input id="Hidden1" type="hidden" />
                        <asp:TextBox ID="TxtUsername" runat="server"></asp:TextBox>
                    </td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td class="auto-style2">Contraseña</td>
                    <td class="auto-style5">
                        <asp:TextBox ID="TxtPassword" runat="server" TextMode="Password"></asp:TextBox>
                    </td>
                    <td class="auto-style3"></td>
                </tr>
                <tr>
                    <td class="auto-style1">&nbsp;</td>
                    <td class="auto-style4">
                        <asp:Button ID="BtnLogin" runat="server" OnClick="BtnLogin_Click" Text="Login" />
                    </td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td class="auto-style4">
                        <asp:Button ID="BtnRegister" runat="server"  Text="Register" OnClick="BtnRegister_Click" />
                    </td>
                </tr>
            </table>
        </div>
    </form>
</body>
</html>