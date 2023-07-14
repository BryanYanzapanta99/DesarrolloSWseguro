using System;
using System.Collections.Generic;
using System.Data.SqlClient;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DataAccess
{
    public class ConnectionManager
    {
        public static string GetConnectionString()
        {
            var builder = new SqlConnectionStringBuilder
            {
                DataSource = "SEBAS-PC\\SQLEXPRESS",
                InitialCatalog = "tramites",
                IntegratedSecurity = true
            };

            return builder.ConnectionString;
        }
    }
}
