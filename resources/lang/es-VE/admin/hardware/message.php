<?php

return [

    'undeployable' 		=> '<strong>Advertencia:</strong> este activo ha sido marcado actualmente como no enviable.                         Si este estado cambia, por favor actualiza el estado de activos.',
    'does_not_exist' 	=> 'El activo no existe.',
    'does_not_exist_var'=> 'Asset with tag :asset_tag not found.',
    'no_tag' 	        => 'No asset tag provided.',
    'does_not_exist_or_not_requestable' => 'Ese activo no existe o no es solicitable.',
    'assoc_users'	 	=> 'Este activo está actualmente asignado a un usuario y no puede ser borrado. Por favor, revisa el activo primero y luego intenta borrarlo. ',
    'warning_audit_date_mismatch' 	=> 'This asset\'s next audit date (:next_audit_date) is before the last audit date (:last_audit_date). Please update the next audit date.',

    'create' => [
        'error'   		=> 'El activo no ha sido creado, por favor, inténtelo de nuevo. :(',
        'success' 		=> 'Activo creado con éxito. :)',
        'success_linked' => 'Activo con etiqueta :tag creado con éxito. <strong><a href=":link" style="color: white;">Haga clic aquí para ver</a></strong>.',
    ],

    'update' => [
        'error'   			=> 'Activo no ha sido actualizado, por favor, inténtelo de nuevo',
        'success' 			=> 'Activo actualizado con éxito.',
        'encrypted_warning' => 'Activo actualizado con éxito, pero los campos personalizados cifrados no se debieron a permisos',
        'nothing_updated'	=>  'Ningún campo fue seleccionado, así que nada se actualizó.',
        'no_assets_selected'  =>  'Ningún recurso fue seleccionado, por lo que no se actualizó nada.',
        'assets_do_not_exist_or_are_invalid' => 'Los activos seleccionados no se pueden actualizar.',
    ],

    'restore' => [
        'error'   		=> 'El activo no fue restaurado, por favor, inténtalo de nuevo',
        'success' 		=> 'Activo restaurado correctamente.',
        'bulk_success' 		=> 'Activo restaurado correctamente.',
        'nothing_updated'   => 'No se seleccionaron activos, por lo que no se restauró nada.', 
    ],

    'audit' => [
        'error'   		=> 'Asset audit unsuccessful: :error ',
        'success' 		=> 'Audoría de activo registrada con éxito.',
    ],


    'deletefile' => [
        'error'   => 'El archivo no fue borrado. Por favor, inténtalo de nuevo.',
        'success' => 'Archivo borrado con éxito.',
    ],

    'upload' => [
        'error'   => 'Archivo(s) no cargado(s). Por favor, inténtelo nuevamente.',
        'success' => 'Archivo(s) cargado(s) con éxito.',
        'nofiles' => 'No seleccionaste ningún archivo para actualizar, o el archivo que estás intentando cargar es demasiado grande',
        'invalidfiles' => 'Uno o más de tus archivos es demasiado grande o es de un tipo que no está permitido. Los tipos de archivo permitidos son png, gif, jpg, doc, docx, pdf, y txt.',
    ],

    'import' => [
        'error'                 => 'Algunos de los elementos no se importaron correctamente.',
        'errorDetail'           => 'Lo siguientes elementos no se importaron debido a errores.',
        'success'               => 'Tu archivo ha sido importado',
        'file_delete_success'   => 'Tu archivo ha sido eliminado con éxito',
        'file_delete_error'      => 'El archivo no se pudo eliminar',
        'file_missing' => 'Falta el archivo seleccionado',
        'header_row_has_malformed_characters' => 'Uno o más atributos en la fila del encabezado contienen caracteres UTF-8 mal formados',
        'content_row_has_malformed_characters' => 'Uno o más atributos en la primera fila de contenido contienen caracteres UTF-8 mal formados',
    ],


    'delete' => [
        'confirm'   	=> '¿Estás seguro de que quieres borrar este archivo?',
        'error'   		=> 'Ha habido un problema eliminando el activo. Por favor, inténtelo de nuevo.',
        'nothing_updated'   => 'Ningún activo se seleccionó, así que nada fue borrado.',
        'success' 		=> 'El activo fue borrado con éxito.',
    ],

    'checkout' => [
        'error'   		=> 'El activo no se ha asignado, por favor, inténtelo de nuevo',
        'success' 		=> 'Activo asignado con éxito.',
        'user_does_not_exist' => 'El usuario es inválido. Por favor, inténtelo de nuevo.',
        'not_available' => '¡Ese activo no está disponible para retirar!',
        'no_assets_selected' => 'Debes seleccionar al menos un activo de la lista',
    ],

    'checkin' => [
        'error'   		=> 'El activo no se ha registrado, por favor, inténtelo de nuevo',
        'success' 		=> 'Activo registrado con éxito.',
        'user_does_not_exist' => 'El usuario es inválido. Por favor inténtelo de nuevo.',
        'already_checked_in'  => 'Ese activo ya ha sido registrado.',

    ],

    'requests' => [
        'error'   		=> 'El activo no fue solicitado, por favor, inténtalo de nuevo',
        'success' 		=> 'Activo solicitado correctamente.',
        'canceled'      => 'Solicitud de asignación cancelada con éxito',
    ],

];
