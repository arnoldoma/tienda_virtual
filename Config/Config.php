<?php
// define("BASE_URL", "http://localhost/tienda_virtual/");
const BASE_URL = "http://localhost/tienda_virtual/";

// Zona horaria
date_default_timezone_get('America/Guatemala');

// Datos de conexion a la Base de Datos
const DB_HOST = "localhost";
const DB_NAME = "db_sistema";
const DB_USER = "root";
const DB_PASSWORD = "";
const DB_CHARSET = "charset=utf8";

// Delimitadores decimal y millar. Ejemplo 24,995.01
const SPD = "."; //Separador de decimal
const SPM = ","; //Separador de millares

// Simbolo de moneda
const SMONEY = "Q";
const SCURRENCY = "GTQ";
