({
    /**
     * Called when initializing the field
     * @param options
     */
    initialize: function(options) {
        this._super('initialize', [options]);
    },

    /**
     * Called when rendering the field
     * @private
     */
    _render: function() {
        this._super('_render');

        var self = this;

        var varDefType = this.def.googleLookupType || "";
        var varDefCountry = this.def.googleFilterCountry || "";
        var varDefPopulate = this.def.googleLookupPopulate || 0;

        var options = {};

        if(varDefType !== ""){
            options['types'] = [varDefType];
        }

        if(varDefCountry !== ""){
          options['componentRestrictions'] =  {country: varDefCountry};
        }
        
        if(this.action == "edit"){
            // console.log(this);

            var autocomplete = new google.maps.places.Autocomplete($("#"+this.name).get(0),options);
            google.maps.event.addListener(autocomplete, 'place_changed', function() {

                var place = autocomplete.getPlace();
                var components=place.address_components;
                // console.log(place.formatted_address);
                self.model.set(self.name, place.formatted_address);

                // populate address fields
                if(varDefPopulate != "0"){
                    var mappingArray = App.lang.getAppListStrings('googleLookupFieldMapping');
                    var populatedFields = [];
                    // console.log(components);
                    for (i = 0; i < components.length; i++) {
                        var populateField = "";
                        populateField = mappingArray[components[i].types[0]];

                        if(populatedFields.indexOf(populateField) > -1){
                            self.model.set(populateField, self.model.get(populateField) + " " + components[i][varDefPopulate]);
                        }else{
                            populatedFields.push(populateField);
                            self.model.set(populateField, components[i][varDefPopulate]);
                        }
                    }
                }
                // console.log(self.model.get(self.name));
            });
        }
    },

    /**
     * Called when formatting the value for display
     * @param value
     */
    format: function(value) {
        return this._super('format', [value]);
    },

    /**
     * Called when unformatting the value for storage
     * @param value
     */
    unformat: function(value) {
        return this._super('unformat', [value]);
    }
})