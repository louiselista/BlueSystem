<?php
class Message {
    const alerta_campo_alfanumerico = "Este campo sólo puede contener caracteres alfanuméricos (a-z, A-Z, 0-9).";     
    const alerta_campo_clave = "Este campo sólo admite cácteres alfanuméricos (a-z, A-Z, 0-9) con una longitud mínima de seis (6) caracteres";
    const alerta_campo_correo = "Este campo debe tener un correo electrónico válido";
    const alerta_campo_descuento_obligatorio = "El descuento no puede estar vacío y sólo acepta cantidades con/sin punto decimal, por favor verifique e intente nuevamente.";    
    const alerta_campo_flotantes = "Este campo sólo admite cantidades con o sin punto decimal.";
    const alerta_campo_mensaje_mayor_cero  = "Este campo sólo admite números mayores a cero (0).";
    const alerta_campo_mensaje_monto = "Hay campos que sólo aceptan cantidades con/sin punto decimal con información incorrecta, por favor verifique e intente nuevamente."; 
    const alerta_campo_mensaje_obligatorio = "Hay campos que son obligatorios los cuales están vacíos, por favor verifique e intente nuevamente.";
    const alerta_campo_mensaje_obligatorio_codigo = "El campo código es obligatorio, por favor verifique e intente nuevamente.";
    const alerta_campo_mensaje_obligatorio_descripcion = "El campo descripción es obligatorio, por favor verifique e intente nuevamente.";    
    const alerta_campo_numeros = "Este campo sólo admite carácteres numéricos.";
    const alerta_campo_obligatorio = "Este campo es obligatorio.";     
    const alerta_campo_repetir_contraseña = "La contraseñas deben ser iguales";
    const alerta_gestionar_blog_campos_vacios = "Debe especificar un título y escribir un cuerpo de mensaje para el post que está intentando publicar. Por favor verifique e intente nuevamente";    
    const alerta_mensaje_solo_una_marca = "Sólo puede añadir una marca para indicar la ubicación del evento. En caso de haberse equivocado, haga click derecho en la marca ya existente para borrarla, y coloque la nueva marca en el lugar deseado";
    
    const file_upload_1 = "El archivo a cargar excede el máximo archivo de carga especificado en php.ini";
    const file_upload_2 = "El archivo a cargar excede el tamaÃ±o mÃ¡ximo de archivo especificado en el formulario HTML";
    const file_upload_3 = "El archivo se ha cargado sólo parcialmente";
    const file_upload_4 = "Ningun archivo ha sido cargado";
    const file_upload_6 = "Falta una carpeta temporal";
    const file_upload_7 = "Error al escribir el archivo en el disco";
    const file_upload_8 = "Una extensión de PHP detuvo la carga de archivos";
    const file_upload_post_max_size = "El archivo a cargar excede el máximo archivo de carga especificado en php.ini";
    const file_upload_max_file_size = "El archivo es muy grande";
    const file_upload_min_file_size = "El archivo es muy pequeño";
    const file_upload_accept_file_types = "Tipo de archivo no permitido";
    const file_upload_max_number_of_files = "Número máximo de archivos excedidos";
    const file_upload_max_width = "La imagen excede el ancho máximo";
    const file_upload_min_width = "La imagen requiere un ancho mínimo";
    const file_upload_max_height = "La imagen excede el alto máximo";
    const file_upload_min_height = "La imagen requiere un alto mínimo";
    const file_upload_abort = "Carga de archivos abortados";
    const file_upload_image_resize = "La imagen requiere un alto mínimo";    
    
    const info_operacion_exitosa = "Operación realizada exitosamente";
    const info_operacion_fallida = "Operación realizada sin éxito";
    
    const confirmacion_gestionar_sub_categorias = "¿Está seguro que desea eliminar esta subcategoría?";
    const confirmacion_gestionar_blog = "¿Está seguro que desea publicar esta entrada?";
    const pagina_no_encontrada = "404: Página no encontrada";
}
