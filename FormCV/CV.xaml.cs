using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

using Xamarin.Forms;
using Xamarin.Forms.Xaml;

namespace FormCV
{
    [XamlCompilation(XamlCompilationOptions.Compile)]
    public partial class CV : ContentPage
    {
        public CV(string nombres, string apellidos, string correo, string ocupacion, string telefono)
        {
            InitializeComponent();

            nombresLabel.Text = nombres;
            apellidosLabel.Text = apellidos;
            correoLabel.Text = correo;
            ocupacionLabel.Text = ocupacion;
            telefonoLabel.Text = telefono;
        }
    }
}