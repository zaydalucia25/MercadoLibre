/* Funcion ajax */
function ajax(url, method, data, dataType, callback) {
    $.ajax({
        url: url,
        method: method,
        data: data,
        dataType: dataType
    }).done(function(dataSrv) {
        callback(dataSrv);
    }).fail(function(jqXHR, textStatus) {
        alert("Error: " + textStatus);
    });
}