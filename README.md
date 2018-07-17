# magento_slider
Two modules for Magento 1.9. The Slider adds a flexslider in the homepage, configurable using CMS blocks, and the AddressType creates a new attribute for the Customer Adress.
## Slider
To configure the module, create a CMS block according to the Flexslider Html standard (just the ul part):
Ex: 
  <ul class="slides">
    <li><img src="http://localhost/skin/frontend/rwd/default/images/logo.gif" /></li>
    <li><img src="https://www.paypalobjects.com/en_US/i/bnr/bnr_nowAccepting_150x60.gif" /></li>
    <li><img src="http://localhost/skin/frontend/rwd/default/images/logo.gif" /></li>
  </ul>

System >> Config >> General >> Design >> "Martinsl -- Flexslider Home Slider"

Use the "Enabled" option to activate or deactivate the home slider.
Paste the id of the CMS block you created in the "Block Identifier" input

The whole module is configured in the layout file, that checks if the slider is active, and adds our slider to the home page, using output="toHtml".

## Address Type

The install script creates the address_type attribute, and adds it to the address forms.
