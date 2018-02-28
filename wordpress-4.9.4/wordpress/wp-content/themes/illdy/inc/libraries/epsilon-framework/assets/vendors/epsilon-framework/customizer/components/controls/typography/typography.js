/**
 * Typography functions
 *
 * @type {{_selectize: null, _linkedFonts: {}, init: EpsilonFramework.typography.init, _resetDefault: EpsilonFramework.typography._resetDefault, _parseJson:
 *     EpsilonFramework.typography._parseJson}}
 */
EpsilonFramework.typography = {
  /**
   * Selectize instance
   */
  _selectize: null,

  /**
   * K/V Pair
   */
  _linkedFonts: {},

  /**
   * Initiate function
   */
  init: function( control ) {
    var self = this,
        sliders,
        container = control.container.find( '.epsilon-typography-container' ),
        uniqueId = container.attr( 'data-unique-id' ),
        selects = container.find( 'select' ),
        inputs = container.find( '.epsilon-typography-input' );

    /**
     * Instantiate the selectize javascript plugin
     * and the input type number
     */
    try {
      self._selectize = selects.selectize();
    }
    catch ( err ) {
      /**
       * In case the selectize plugin is not loaded, raise an error
       */
      console.warn( 'selectize not yet loaded' );
    }
    /**
     * On triggering the change event, create a json with the values and
     * send it to the preview window
     */
    inputs.on( 'change', function() {
      var val = EpsilonFramework.typography._parseJson( inputs, uniqueId, control );
      jQuery( '#hidden_input_' + uniqueId ).val( val ).trigger( 'change' );
    } );

    /**
     * On clicking the advanced options toggler,
     */
    container.find( '.epsilon-typography-advanced-options-toggler' ).on( 'click', function( e ) {
      var toggle = jQuery( this ).attr( 'data-toggle' );
      e.preventDefault();
      jQuery( this ).toggleClass( 'active' ).parent().toggleClass( 'active' );
      jQuery( '#' + toggle ).slideToggle().addClass( 'active' );
    } );

    /**
     * Great use of the EpsilonFramework, ahoy!
     */
    sliders = jQuery( '.epsilon-typography-container' ).find( '.slider-container' );
    jQuery.each( sliders, function() {
      EpsilonFramework.rangeSliders.init( this );
    } );

    /**
     * Reset button
     */
    jQuery( '.epsilon-typography-default' ).on( 'click', function( e ) {
      e.preventDefault();
      EpsilonFramework.typography._resetDefault( jQuery( this ) );
    } );

  },

  /**
   * Reset defaults
   *
   * @param element
   * @private
   */
  _resetDefault: function( element ) {
    var container = jQuery( element ).parent(),
        uniqueId = container.attr( 'data-unique-id' ),
        selects = container.find( 'select' ),
        inputs = container.find( 'inputs' ),
        val,
        control = wp.customize.control( uniqueId );

    var fontFamily = selects[ 0 ].selectize;

    var object = {
          'action': 'epsilon_generate_typography_css',
          'class': 'Epsilon_Typography',
          'id': uniqueId,
          'data': {
            'selectors': control.params.selectors,
            'stylesheet': control.params.stylesheet,
            'json': {}
          }
        },
        api = wp.customize;

    fontFamily.setValue( 'default_font' );

    if ( jQuery( '#' + uniqueId + '-font-size' ).length ) {
      val = jQuery( '#' + uniqueId + '-font-size' ).
          attr( 'data-default-font-size' );

      jQuery( '#' + uniqueId + '-font-size' ).
          val( val ).
          trigger( 'change' ).
          trigger( 'blur' );
      object.data.json[ 'font-size' ] = '';
    }

    if ( jQuery( '#' + uniqueId + '-line-height' ).length ) {
      val = jQuery( '#' + uniqueId + '-line-height' ).
          attr( 'data-default-line-height' );

      jQuery( '#' + uniqueId + '-line-height' ).
          val( val ).
          trigger( 'change' ).
          trigger( 'blur' );
      object.data.json[ 'line-height' ] = '';
    }

    if ( jQuery( '#' + uniqueId + '-letter-spacing' ).length ) {
      val = jQuery( '#' + uniqueId + '-letter-spacing' ).
          attr( 'data-default-letter-spacing' );

      jQuery( '#' + uniqueId + '-letter-spacing' ).
          val( val ).
          trigger( 'change' ).
          trigger( 'blur' );
      object.data.json[ 'letter-spacing' ] = '';
    }

    object.data.json[ 'font-family' ] = 'default_font';
    object.data.json[ 'font-weight' ] = '';
    object.data.json[ 'font-style' ] = '';

    api.previewer.send( 'update-inline-typography-css', object );
  },

  /**
   * Parse/create the json and send it to the preview window
   *
   * @param inputs
   * @param id
   * @private
   */
  _parseJson: function( inputs, id, control ) {
    var object = {
          'action': 'epsilon_generate_typography_css',
          'class': 'Epsilon_Typography',
          'id': id,
          'data': {
            'selectors': control.params.selectors,
            'stylesheet': control.params.stylesheet,
            'json': {}
          }
        },
        api = wp.customize;

    jQuery.each( inputs, function( index, value ) {
      var key = jQuery( value ).attr( 'id' ),
          replace = id + '-',
          type = jQuery( this ).attr( 'type' );
      key = key.replace( replace, '' );

      if ( 'checkbox' === type ) {
        object.data.json[ key ] = jQuery( this ).prop( 'checked' ) ? jQuery( value ).val() : '';
      } else {
        object.data.json[ key ] = jQuery( value ).val();
      }

    } );

    api.previewer.send( 'update-inline-typography-css', object );
    return JSON.stringify( object.data );
  }
};
