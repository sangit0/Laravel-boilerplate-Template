var EasyAjax = new function () {
    this.post = function (data,url) {
        return $.ajax({
            data: {data:data},
            url: url,
            type: 'POST',
            beforeSend: function (request) {
                return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
            }
        });
    }
    this.get = function (url) {
        return $.ajax({
            url: url,
            type: 'GET',
            beforeSend: function (request) {
                return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
            },
        });
    }
    this.put = function (data,url) {
        return $.ajax({
            data: {data:data},
            url: url,
            type: 'PUT',
            beforeSend: function (request) {
                return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
            }
        });
    }
    this.delete = function (url) {
        return $.ajax({
            url: url,
            type: 'DELETE',
            beforeSend: function (request) {
                return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
            }
        });
    }
}
