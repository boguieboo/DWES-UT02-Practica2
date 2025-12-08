package es.dwes.UT01;

import java.io.Serializable;
import java.util.List;
import java.util.Map;

import jakarta.enterprise.context.RequestScoped;
import jakarta.inject.Named;

@Named("helloBean")
@RequestScoped
public class HelloBean implements Serializable {

    // Práctica 2: Genera en este bean el listado de usuarios que 
    // se mostrará en la página.xhtml
        
    private String nombre = "María";
    private int edad = 28;

    public String getNombre() {
        return nombre;
    }

    public int getEdad() {
        return edad;
    }

    public List<Producto> getProductos() {
        return List.of(
            new Producto("Manzanas", 2.5),
            new Producto("Peras", 3.0),
            new Producto("Plátanos", 1.8)
        );
    }

    // Clase interna para productos
    public static class Producto {
        private String nombre;
        private double precio;

        public Producto(String nombre, double precio) {
            this.nombre = nombre;
            this.precio = precio;
        }

        public String getNombre() { return nombre; }
        public double getPrecio() { return precio; }
    }
// Práctica 2: Crea aquí la clase que defina a un usuario
// Clase interna para usuarios
    public static class Usuario {
        private String nombre;
        private String apellidos;
        private String dni;
        private String email;
        private int edad;
        private Map<String, Double> pagos;

        public Usuario(String nombre, String apellidos, String dni, String email, int edad,
                       Map<String, Double> pagos) {
            this.nombre = nombre;
            this.apellidos = apellidos;
            this.dni = dni;
            this.email = email;
            this.edad = edad;
            this.pagos = pagos;
        }

        public String getNombre() { return nombre; }
        public String getApellidos() { return apellidos; }
        public String getDni() { return dni; }
        public String getEmail() { return email; }
        public int getEdad() { return edad; }
        public Map<String, Double> getPagos() { return pagos; }
    }

 // Lista de usuarios
 public List<Usuario> getUsuarios() {
    return List.of(
        new Usuario(
            "María",
            "López García",
            "12345678A",
            "maria@example.com",
            28,
            Map.of("enero", 20.0, "febrero", 30.0)
        ),
        new Usuario(
            "Juan",
            "Pérez Sánchez",
            "87654321B",
            "juan@example.com",
            32,
            Map.of("enero", 10.0, "marzo", 25.5)
        ),
        new Usuario(
            "Lucía",
            "Martín Ruiz",
            "11223344C",
            "lucia@example.com",
            22,
            Map.of("enero", 50.0)
        )
    );
}


}
