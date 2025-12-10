from django.shortcuts import render

# Create your views here.
from django.http import HttpResponse

import json

def usuario_view(request):

    # JSON del ejercicio 02
    usuario_json = """
    {
        "nombre": "Laura",
        "apellidos": "Gómez Pérez",
        "dni": "12345678A",
        "email": "laura.gomez@ejemplo.com",
        "telefono": "654321987",
        "pagos": {
            "enero": 20,
            "febrero": 20,
            "marzo": 20,
            "abril": 0,
            "mayo": 20,
            "junio": 20,
            "julio": 20,
            "agosto": 0,
            "septiembre": 20,
            "octubre": 20,
            "noviembre": 20,
            "diciembre": 20
        }
    }
    """

    # Convertir JSON a diccionario Python
    usuario = json.loads(usuario_json)

    # Calcular el total anual
    total_anual = sum(usuario["pagos"].values())

    # Construir tabla de pagos
    tabla_pagos = """
        <table border='1' cellpadding='5'>
            <tr>
                <th>Mes</th>
                <th>Importe</th>
                <th>Estado</th>
            </tr>
    """

    for mes, cantidad in usuario["pagos"].items():
        estado = "PAGADO" if cantidad > 0 else "<span style='color:red'>PENDIENTE</span>"

        tabla_pagos += f"""
            <tr>
                <td>{mes.capitalize()}</td>
                <td>{cantidad} €</td>
                <td>{estado}</td>
            </tr>
        """

    tabla_pagos += f"""
        <tr>
            <th>Total anual</th>
            <th colspan='2'>{total_anual} €</th>
        </tr>
        </table>
    """

    # HTML final
    html = f"""
    <html>
        <head><title>Datos del Usuario</title></head>
        <body>

            <h1>Información personal</h1>
            <p><strong>Nombre:</strong> {usuario['nombre']}</p>
            <p><strong>Apellidos:</strong> {usuario['apellidos']}</p>
            <p><strong>DNI:</strong> {usuario['dni']}</p>
            <p><strong>Email:</strong> {usuario['email']}</p>
            <p><strong>Teléfono:</strong> {usuario['telefono']}</p>

            <h2>Pagos mensuales</h2>
            {tabla_pagos}

        </body>
    </html>
    """

    return HttpResponse(html)