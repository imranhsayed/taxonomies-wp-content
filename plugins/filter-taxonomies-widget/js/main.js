(function ( $ ) {

	$( '#product-form' ).on( 'submit', function () {
		event.preventDefault();
		ajaxRequest();
	} );

	function ajaxRequest() {
		var productName = document.querySelector( '#product-name' ),
			productCat = document.querySelector( '#product-category' ),
			productSubCat = document.querySelector( '#product-sub-category' ),
			productColor = document.querySelector( '#product-color' ),
			ajaxUrl = postdata.ajax_url,
			nonceValue = postdata.ajax_nonce;
		console.log( nonceValue );
		console.log( productName.value );
		console.log( productCat.value );
		console.log( productColor.value );

		var request = $.post(
			ajaxUrl,   // this url till admin-ajax.php  is given by functions.php wp_localoze_script()
			{
				action: 'my_ajax_hook',
				security: nonceValue,
				product_name: productName.value,
				product_cat: productCat.value,
				product_sub_cat: productSubCat.value,
				product_color: productColor.value
			},
			function( status ){
				console.log( status );  // result {success: true, data: {…}}data: data_recieved_from_js: {action: "my_ajax_hook", name: "Lawrence", profession: "actress"}hello_world: "hello"__proto__: Objectsuccess: true__proto__: Object
			}
		);

		request.done( function ( response ) {
			console.log( 'The server responded: ');
			console.log( response );
		} );

	}

	$( '#product-category' ).on( 'change', function () {
		subCatAjaxRequest()
	} );

	function subCatAjaxRequest() {
			var ajaxUrl = postdata.ajax_url,
				nonceValue = postdata.ajax_nonce,
				catId = $( '#product-category' ).val();

			var request = $.post(
				ajaxUrl,   // this url till admin-ajax.php  is given by functions.php wp_localoze_script()
				{
					action: 'sub_cat_ajax',
					security: nonceValue,
					cat_id: catId
				},
				function( status ){
					console.log( status );  // result {success: true, data: {…}}data: data_recieved_from_js: {action: "my_ajax_hook", name: "Lawrence", profession: "actress"}hello_world: "hello"__proto__: Objectsuccess: true__proto__: Object
				}
			);

			request.done( function ( response ) {
				console.log( 'The server responded: ');
				var productSubCatEl = $( '#product-sub-category' );
				productSubCatEl.html( '' );
				productSubCatEl.append( response.data.my_data );
			} );
	}
})( jQuery );