(function($){
    
    var files;
    var URI = {
        UPLOAD : 'actions/api-imagenes.php?action=subir',
        LIST : 'actions/api-imagenes.php?action=listar'
    };

    $('input[type=file]').on('change', prepareUpload);
    $('form').on('submit', uploadFiles);
    
    var loadImgs = function(event){
        $.ajax({
            url: URI.LIST,
            type: 'GET',
            dataType: 'json'
        }).done(function(response){
            if(!response.error){
                $("#listadoProductos").html("");
                response.data.forEach(function(item){
                    $("#listadoProductos").append('<li><img src="' + item.path + "/" + item.id  + "/" + item.file_name + '" /></li>');
                });
            }
        });
    }; 
    
    function prepareUpload(event){
        files = event.target.files;
        console.log(files);
    };
    
    function uploadFiles(event){
        event.preventDefault();
        
        var data = new FormData();
        
        $.each(files, function(key, value){
            data.append(key, value);
        });

        var miVariable = null;
        
        $.ajax({
            url: URI.UPLOAD,
            type: 'POST',
            data: data,
            cache: false,
            dataType: 'json',
            processData: false,
            contentType: false
        }).done(function(response){
            loadImgs();
        });
    };
    
    loadImgs();
    
})(jQuery)