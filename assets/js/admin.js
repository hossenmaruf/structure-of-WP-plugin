;(function($){


     $(table.wp-list-table.contacts).on('click' , 'a.submitdelete', function(e) {

    e.preventDefault();

        if(!confirm(test.confirm)) {
            return ;
        }

        var self = $(this) ,
        id = self.data('id') ;

        //   wp.ajax.send("wd-acdemy-deleted-contact" ,{

        // data : {
        //     id : id ,
        //     _wpnonce = test.nonce 
        // }

        wp.ajax.post('m-academy-delete-contact' , {
            id : id ,
            _wpnonce : test.nonce  
        })
        .done(function(response){

            self.closest('tr')
            .css('background-color' , 'red') 
            .hide(600, function(){
                $(this).remove() ;
            }) ;

        }) 
        .fail(function() {
            alert(test.error) ;
        }) ;
        

    }) ;

})



