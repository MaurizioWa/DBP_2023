using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Xamarin.Forms;

namespace FormCV
{
    public partial class MainPage : ContentPage
    {
        public MainPage()
        {
            InitializeComponent();
        }

        private async void OnSubmitClicked(object sender, EventArgs e)
        {
            var nombres = nombresEntry.Text;
            var apellidos = apellidosEntry.Text;
            var correo = correoEntry.Text;
            var ocupacion = ocupacionEntry.Text;
            var telefono = telefonoEntry.Text;

            var cvPage = new CV(nombres, apellidos, correo, ocupacion, telefono);
            await Navigation.PushAsync(cvPage);
        }

    }
}
