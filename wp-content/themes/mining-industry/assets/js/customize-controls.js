( function( api ) {

	// Extends our custom "mining-industry" section.
	api.sectionConstructor['mining-industry'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );