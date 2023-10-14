function convertir()
{
    let id = document.getElementById("euros").value;
    fetch('https://jsonplaceholder.typicode.com/todos/'+id)
    .then(response => response.json())
    .then(json => mostrar(json));
}

function mostrar(array)
{
    document.getElementById("userId").innerHTML = array['userId'];
    document.getElementById("id").innerHTML = array['id'];
    document.getElementById("title").innerHTML = array['title'];
    document.getElementById("completed").innerHTML = array['completed'];
}

function fun1()
{
    $("#userId").text('3');
}

function fun2()
{
    $("#id").text('4');
}

function fun3()
{
    $("#title").text('IACC');
}

function fun4()
{
    $("#title").css("color", "#ef1111");
}

function fun5()
{
    $("#title").css("color", "#000000");
}

function cargar()
{
    let miPC = new Object();
    miPC.tipo = "Laptop";
    miPC.marca = "Lenovo";
    miPC.modelo = "Legion";
    miPC.procesador = "i7-11700k";
    miPC.precio = 1449990;

    document.getElementById("tipo").innerHTML = miPC.tipo;
    document.getElementById("marca").innerHTML = miPC.marca;
    document.getElementById("modelo").innerHTML = miPC.modelo;
    document.getElementById("procesador").innerHTML = miPC.procesador;
    document.getElementById("precio").innerHTML = miPC.precio;
}
