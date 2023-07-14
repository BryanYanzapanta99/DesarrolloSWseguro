<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="WResidencia.aspx.cs" Inherits="WTramites.WResidencia" %>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <style>
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 10px;
        }

        .form-input {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        .form-submit {
            padding: 10px 20px;
            background-color:#28b4e7;
            color: #fff;
            border: none;
            cursor: pointer;
           

        }

        .form-submit:hover {
            background-color: #50d7cfcc;
        }

        .botonx {
            width: 100%;
            height: 100px; /* Ajusta la altura según tus necesidades */
            padding: 5px;
            box-sizing: border-box;
            overflow-y: auto; /* Añade una barra de desplazamiento vertical */
        }
    </style>
</head>
<body>
    <div class="container">
        <form id="form1" runat="server">
            
            <h3>Ingrese la cedula</h3>
            <asp:TextBox ID="txtCedula" runat="server" CssClass="form-input"></asp:TextBox>

            <h3>Resultado</h3>
            <asp:TextBox ID="txtResidenciaC" runat="server" CssClass="botonx" TextMode="MultiLine"></asp:TextBox>

            <br />
            <br />

            <asp:Button ID="btnResidencia" runat="server" Text="Buscar Residencia" OnClick="btnResidencia_Click" CssClass="form-submit" />
        </form>
    </div>
</body>
</html>
