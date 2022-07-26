<?php
/**
 * Plugin Name:       Currency Pro
 * Plugin URI:        https://kazimahmud.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Kazi Mahmud Al Azad
 * Author URI:        https://kazimahmud.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://kazimahmud.com/my-plugin/
 * Text Domain:       cptd
 * Domain Path:       /languages
 */


if ( ! defined( 'ABSPATH' ) ) {
	return;

}



 final class Currency_Pro{

    public function __construct(){
        // add_action('admin_init', arrray($this,'cp_currencies_page'));
        add_action('wp_enqueue_scripts', array($this,'cp_custom_styles'));

    }

    public function cp_custom_styles(){
        wp_enqueue_style('boottrapcdn', 'https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css');
        wp_enqueue_style('stylesheet', plugin_dir_url(__FILE__).'/assets/css/style.css');

        wp_enqueue_script('jquery-script', 'https://code.jquery.com/jquery-3.6.0.min.js',array(),'', true);
        wp_enqueue_script('custom-script', plugin_dir_url( __FILE__ ).'assets/js/custom.js',array('jquery-script'),'', true);
    
    }

    // public function cp_currencies_page(){

    // }

    public function shortcode(){
        add_shortcode('currency-pro',array($this,'cp_shorcode'));
    } 
    
    
    public function cp_shorcode(){

        ob_start();?>
    <div class="wrap wrapingdiv">
        <div>
            <h1>Currency Prices</h1>
        </div>
        <div>
        
            <form action="" id="calculateform">

                <select id="currency" name="currency">
                    <option>select currency</option>
                    <option value="AFN">Afghan Afghani</option>
                    <option value="ALL">Albanian Lek</option>
                    <option value="DZD">Algerian Dinar</option>
                    <option value="AOA">Angolan Kwanza</option>
                    <option value="ARS">Argentine Peso</option>
                    <option value="AMD">Armenian Dram</option>
                    <option value="AWG">Aruban Florin</option>
                    <option value="AUD">Australian Dollar</option>
                    <option value="AZN">Azerbaijani Manat</option>
                    <option value="BSD">Bahamian Dollar</option>
                    <option value="BHD">Bahraini Dinar</option>
                    <option value="BDT">Bangladeshi Taka</option>
                    <option value="BBD">Barbadian Dollar</option>
                    <option value="BYR">Belarusian Ruble</option>
                    <option value="BEF">Belgian Franc</option>
                    <option value="BZD">Belize Dollar</option>
                    <option value="BMD">Bermudan Dollar</option>
                    <option value="BTN">Bhutanese Ngultrum</option>
                    <option value="BTC">Bitcoin</option>
                    <option value="BOB">Bolivian Boliviano</option>
                    <option value="BAM">Bosnia-Herzegovina Convertible Mark</option>
                    <option value="BWP">Botswanan Pula</option>
                    <option value="BRL">Brazilian Real</option>
                    <option value="GBP">British Pound Sterling</option>
                    <option value="BND">Brunei Dollar</option>
                    <option value="BGN">Bulgarian Lev</option>
                    <option value="BIF">Burundian Franc</option>
                    <option value="KHR">Cambodian Riel</option>
                    <option value="CAD">Canadian Dollar</option>
                    <option value="CVE">Cape Verdean Escudo</option>
                    <option value="KYD">Cayman Islands Dollar</option>
                    <option value="XOF">CFA Franc BCEAO</option>
                    <option value="XAF">CFA Franc BEAC</option>
                    <option value="XPF">CFP Franc</option>
                    <option value="CLP">Chilean Peso</option>
                    <option value="CNY">Chinese Yuan</option>
                    <option value="COP">Colombian Peso</option>
                    <option value="KMF">Comorian Franc</option>
                    <option value="CDF">Congolese Franc</option>
                    <option value="CRC">Costa Rican ColÃ³n</option>
                    <option value="HRK">Croatian Kuna</option>
                    <option value="CUC">Cuban Convertible Peso</option>
                    <option value="CZK">Czech Republic Koruna</option>
                    <option value="DKK">Danish Krone</option>
                    <option value="DJF">Djiboutian Franc</option>
                    <option value="DOP">Dominican Peso</option>
                    <option value="XCD">East Caribbean Dollar</option>
                    <option value="EGP">Egyptian Pound</option>
                    <option value="ERN">Eritrean Nakfa</option>
                    <option value="EEK">Estonian Kroon</option>
                    <option value="ETB">Ethiopian Birr</option>
                    <option value="EUR">Euro</option>
                    <option value="FKP">Falkland Islands Pound</option>
                    <option value="FJD">Fijian Dollar</option>
                    <option value="GMD">Gambian Dalasi</option>
                    <option value="GEL">Georgian Lari</option>
                    <option value="DEM">German Mark</option>
                    <option value="GHS">Ghanaian Cedi</option>
                    <option value="GIP">Gibraltar Pound</option>
                    <option value="GRD">Greek Drachma</option>
                    <option value="GTQ">Guatemalan Quetzal</option>
                    <option value="GNF">Guinean Franc</option>
                    <option value="GYD">Guyanaese Dollar</option>
                    <option value="HTG">Haitian Gourde</option>
                    <option value="HNL">Honduran Lempira</option>
                    <option value="HKD">Hong Kong Dollar</option>
                    <option value="HUF">Hungarian Forint</option>
                    <option value="ISK">Icelandic KrÃ³na</option>
                    <option value="INR">Indian Rupee</option>
                    <option value="IDR">Indonesian Rupiah</option>
                    <option value="IRR">Iranian Rial</option>
                    <option value="IQD">Iraqi Dinar</option>
                    <option value="ILS">Israeli New Sheqel</option>
                    <option value="ITL">Italian Lira</option>
                    <option value="JMD">Jamaican Dollar</option>
                    <option value="JPY">Japanese Yen</option>
                    <option value="JOD">Jordanian Dinar</option>
                    <option value="KZT">Kazakhstani Tenge</option>
                    <option value="KES">Kenyan Shilling</option>
                    <option value="KWD">Kuwaiti Dinar</option>
                    <option value="KGS">Kyrgystani Som</option>
                    <option value="LAK">Laotian Kip</option>
                    <option value="LVL">Latvian Lats</option>
                    <option value="LBP">Lebanese Pound</option>
                    <option value="LSL">Lesotho Loti</option>
                    <option value="LRD">Liberian Dollar</option>
                    <option value="LYD">Libyan Dinar</option>
                    <option value="LTL">Lithuanian Litas</option>
                    <option value="MOP">Macanese Pataca</option>
                    <option value="MKD">Macedonian Denar</option>
                    <option value="MGA">Malagasy Ariary</option>
                    <option value="MWK">Malawian Kwacha</option>
                    <option value="MYR">Malaysian Ringgit</option>
                    <option value="MVR">Maldivian Rufiyaa</option>
                    <option value="MRO">Mauritanian Ouguiya</option>
                    <option value="MUR">Mauritian Rupee</option>
                    <option value="MXN">Mexican Peso</option>
                    <option value="MDL">Moldovan Leu</option>
                    <option value="MNT">Mongolian Tugrik</option>
                    <option value="MAD">Moroccan Dirham</option>
                    <option value="MZM">Mozambican Metical</option>
                    <option value="MMK">Myanmar Kyat</option>
                    <option value="NAD">Namibian Dollar</option>
                    <option value="NPR">Nepalese Rupee</option>
                    <option value="ANG">Netherlands Antillean Guilder</option>
                    <option value="TWD">New Taiwan Dollar</option>
                    <option value="NZD">New Zealand Dollar</option>
                    <option value="NIO">Nicaraguan CÃ³rdoba</option>
                    <option value="NGN">Nigerian Naira</option>
                    <option value="KPW">North Korean Won</option>
                    <option value="NOK">Norwegian Krone</option>
                    <option value="OMR">Omani Rial</option>
                    <option value="PKR">Pakistani Rupee</option>
                    <option value="PAB">Panamanian Balboa</option>
                    <option value="PGK">Papua New Guinean Kina</option>
                    <option value="PYG">Paraguayan Guarani</option>
                    <option value="PEN">Peruvian Nuevo Sol</option>
                    <option value="PHP">Philippine Peso</option>
                    <option value="PLN">Polish Zloty</option>
                    <option value="QAR">Qatari Rial</option>
                    <option value="RON">Romanian Leu</option>
                    <option value="RUB">Russian Ruble</option>
                    <option value="RWF">Rwandan Franc</option>
                    <option value="SVC">Salvadoran ColÃ³n</option>
                    <option value="WST">Samoan Tala</option>
                    <option value="SAR">Saudi Riyal</option>
                    <option value="RSD">Serbian Dinar</option>
                    <option value="SCR">Seychellois Rupee</option>
                    <option value="SLL">Sierra Leonean Leone</option>
                    <option value="SGD">Singapore Dollar</option>
                    <option value="SKK">Slovak Koruna</option>
                    <option value="SBD">Solomon Islands Dollar</option>
                    <option value="SOS">Somali Shilling</option>
                    <option value="ZAR">South African Rand</option>
                    <option value="KRW">South Korean Won</option>
                    <option value="XDR">Special Drawing Rights</option>
                    <option value="LKR">Sri Lankan Rupee</option>
                    <option value="SHP">St. Helena Pound</option>
                    <option value="SDG">Sudanese Pound</option>
                    <option value="SRD">Surinamese Dollar</option>
                    <option value="SZL">Swazi Lilangeni</option>
                    <option value="SEK">Swedish Krona</option>
                    <option value="CHF">Swiss Franc</option>
                    <option value="SYP">Syrian Pound</option>
                    <option value="STD">São Tomé and Príncipe Dobra</option>
                    <option value="TJS">Tajikistani Somoni</option>
                    <option value="TZS">Tanzanian Shilling</option>
                    <option value="THB">Thai Baht</option>
                    <option value="TOP">Tongan pa'anga</option>
                    <option value="TTD">Trinidad & Tobago Dollar</option>
                    <option value="TND">Tunisian Dinar</option>
                    <option value="TRY">Turkish Lira</option>
                    <option value="TMT">Turkmenistani Manat</option>
                    <option value="UGX">Ugandan Shilling</option>
                    <option value="UAH">Ukrainian Hryvnia</option>
                    <option value="AED">United Arab Emirates Dirham</option>
                    <option value="UYU">Uruguayan Peso</option>
                    <option value="USD">US Dollar</option>
                    <option value="UZS">Uzbekistan Som</option>
                    <option value="VUV">Vanuatu Vatu</option>
                    <option value="VEF">Venezuelan BolÃ­var</option>
                    <option value="VND">Vietnamese Dong</option>
                    <option value="YER">Yemeni Rial</option>
                    <option value="ZMK">Zambian Kwacha</option>
                </select>
                <input type="number" id="currencyamount">

                <select id="currency2" name="currency2">
                    <option>select currency</option>
                    <option value="AFN">Afghan Afghani</option>
                    <option value="ALL">Albanian Lek</option>
                    <option value="DZD">Algerian Dinar</option>
                    <option value="AOA">Angolan Kwanza</option>
                    <option value="ARS">Argentine Peso</option>
                    <option value="AMD">Armenian Dram</option>
                    <option value="AWG">Aruban Florin</option>
                    <option value="AUD">Australian Dollar</option>
                    <option value="AZN">Azerbaijani Manat</option>
                    <option value="BSD">Bahamian Dollar</option>
                    <option value="BHD">Bahraini Dinar</option>
                    <option value="BDT">Bangladeshi Taka</option>
                    <option value="BBD">Barbadian Dollar</option>
                    <option value="BYR">Belarusian Ruble</option>
                    <option value="BEF">Belgian Franc</option>
                    <option value="BZD">Belize Dollar</option>
                    <option value="BMD">Bermudan Dollar</option>
                    <option value="BTN">Bhutanese Ngultrum</option>
                    <option value="BTC">Bitcoin</option>
                    <option value="BOB">Bolivian Boliviano</option>
                    <option value="BAM">Bosnia-Herzegovina Convertible Mark</option>
                    <option value="BWP">Botswanan Pula</option>
                    <option value="BRL">Brazilian Real</option>
                    <option value="GBP">British Pound Sterling</option>
                    <option value="BND">Brunei Dollar</option>
                    <option value="BGN">Bulgarian Lev</option>
                    <option value="BIF">Burundian Franc</option>
                    <option value="KHR">Cambodian Riel</option>
                    <option value="CAD">Canadian Dollar</option>
                    <option value="CVE">Cape Verdean Escudo</option>
                    <option value="KYD">Cayman Islands Dollar</option>
                    <option value="XOF">CFA Franc BCEAO</option>
                    <option value="XAF">CFA Franc BEAC</option>
                    <option value="XPF">CFP Franc</option>
                    <option value="CLP">Chilean Peso</option>
                    <option value="CNY">Chinese Yuan</option>
                    <option value="COP">Colombian Peso</option>
                    <option value="KMF">Comorian Franc</option>
                    <option value="CDF">Congolese Franc</option>
                    <option value="CRC">Costa Rican ColÃ³n</option>
                    <option value="HRK">Croatian Kuna</option>
                    <option value="CUC">Cuban Convertible Peso</option>
                    <option value="CZK">Czech Republic Koruna</option>
                    <option value="DKK">Danish Krone</option>
                    <option value="DJF">Djiboutian Franc</option>
                    <option value="DOP">Dominican Peso</option>
                    <option value="XCD">East Caribbean Dollar</option>
                    <option value="EGP">Egyptian Pound</option>
                    <option value="ERN">Eritrean Nakfa</option>
                    <option value="EEK">Estonian Kroon</option>
                    <option value="ETB">Ethiopian Birr</option>
                    <option value="EUR">Euro</option>
                    <option value="FKP">Falkland Islands Pound</option>
                    <option value="FJD">Fijian Dollar</option>
                    <option value="GMD">Gambian Dalasi</option>
                    <option value="GEL">Georgian Lari</option>
                    <option value="DEM">German Mark</option>
                    <option value="GHS">Ghanaian Cedi</option>
                    <option value="GIP">Gibraltar Pound</option>
                    <option value="GRD">Greek Drachma</option>
                    <option value="GTQ">Guatemalan Quetzal</option>
                    <option value="GNF">Guinean Franc</option>
                    <option value="GYD">Guyanaese Dollar</option>
                    <option value="HTG">Haitian Gourde</option>
                    <option value="HNL">Honduran Lempira</option>
                    <option value="HKD">Hong Kong Dollar</option>
                    <option value="HUF">Hungarian Forint</option>
                    <option value="ISK">Icelandic KrÃ³na</option>
                    <option value="INR">Indian Rupee</option>
                    <option value="IDR">Indonesian Rupiah</option>
                    <option value="IRR">Iranian Rial</option>
                    <option value="IQD">Iraqi Dinar</option>
                    <option value="ILS">Israeli New Sheqel</option>
                    <option value="ITL">Italian Lira</option>
                    <option value="JMD">Jamaican Dollar</option>
                    <option value="JPY">Japanese Yen</option>
                    <option value="JOD">Jordanian Dinar</option>
                    <option value="KZT">Kazakhstani Tenge</option>
                    <option value="KES">Kenyan Shilling</option>
                    <option value="KWD">Kuwaiti Dinar</option>
                    <option value="KGS">Kyrgystani Som</option>
                    <option value="LAK">Laotian Kip</option>
                    <option value="LVL">Latvian Lats</option>
                    <option value="LBP">Lebanese Pound</option>
                    <option value="LSL">Lesotho Loti</option>
                    <option value="LRD">Liberian Dollar</option>
                    <option value="LYD">Libyan Dinar</option>
                    <option value="LTL">Lithuanian Litas</option>
                    <option value="MOP">Macanese Pataca</option>
                    <option value="MKD">Macedonian Denar</option>
                    <option value="MGA">Malagasy Ariary</option>
                    <option value="MWK">Malawian Kwacha</option>
                    <option value="MYR">Malaysian Ringgit</option>
                    <option value="MVR">Maldivian Rufiyaa</option>
                    <option value="MRO">Mauritanian Ouguiya</option>
                    <option value="MUR">Mauritian Rupee</option>
                    <option value="MXN">Mexican Peso</option>
                    <option value="MDL">Moldovan Leu</option>
                    <option value="MNT">Mongolian Tugrik</option>
                    <option value="MAD">Moroccan Dirham</option>
                    <option value="MZM">Mozambican Metical</option>
                    <option value="MMK">Myanmar Kyat</option>
                    <option value="NAD">Namibian Dollar</option>
                    <option value="NPR">Nepalese Rupee</option>
                    <option value="ANG">Netherlands Antillean Guilder</option>
                    <option value="TWD">New Taiwan Dollar</option>
                    <option value="NZD">New Zealand Dollar</option>
                    <option value="NIO">Nicaraguan CÃ³rdoba</option>
                    <option value="NGN">Nigerian Naira</option>
                    <option value="KPW">North Korean Won</option>
                    <option value="NOK">Norwegian Krone</option>
                    <option value="OMR">Omani Rial</option>
                    <option value="PKR">Pakistani Rupee</option>
                    <option value="PAB">Panamanian Balboa</option>
                    <option value="PGK">Papua New Guinean Kina</option>
                    <option value="PYG">Paraguayan Guarani</option>
                    <option value="PEN">Peruvian Nuevo Sol</option>
                    <option value="PHP">Philippine Peso</option>
                    <option value="PLN">Polish Zloty</option>
                    <option value="QAR">Qatari Rial</option>
                    <option value="RON">Romanian Leu</option>
                    <option value="RUB">Russian Ruble</option>
                    <option value="RWF">Rwandan Franc</option>
                    <option value="SVC">Salvadoran ColÃ³n</option>
                    <option value="WST">Samoan Tala</option>
                    <option value="SAR">Saudi Riyal</option>
                    <option value="RSD">Serbian Dinar</option>
                    <option value="SCR">Seychellois Rupee</option>
                    <option value="SLL">Sierra Leonean Leone</option>
                    <option value="SGD">Singapore Dollar</option>
                    <option value="SKK">Slovak Koruna</option>
                    <option value="SBD">Solomon Islands Dollar</option>
                    <option value="SOS">Somali Shilling</option>
                    <option value="ZAR">South African Rand</option>
                    <option value="KRW">South Korean Won</option>
                    <option value="XDR">Special Drawing Rights</option>
                    <option value="LKR">Sri Lankan Rupee</option>
                    <option value="SHP">St. Helena Pound</option>
                    <option value="SDG">Sudanese Pound</option>
                    <option value="SRD">Surinamese Dollar</option>
                    <option value="SZL">Swazi Lilangeni</option>
                    <option value="SEK">Swedish Krona</option>
                    <option value="CHF">Swiss Franc</option>
                    <option value="SYP">Syrian Pound</option>
                    <option value="STD">São Tomé and Príncipe Dobra</option>
                    <option value="TJS">Tajikistani Somoni</option>
                    <option value="TZS">Tanzanian Shilling</option>
                    <option value="THB">Thai Baht</option>
                    <option value="TOP">Tongan pa'anga</option>
                    <option value="TTD">Trinidad & Tobago Dollar</option>
                    <option value="TND">Tunisian Dinar</option>
                    <option value="TRY">Turkish Lira</option>
                    <option value="TMT">Turkmenistani Manat</option>
                    <option value="UGX">Ugandan Shilling</option>
                    <option value="UAH">Ukrainian Hryvnia</option>
                    <option value="AED">United Arab Emirates Dirham</option>
                    <option value="UYU">Uruguayan Peso</option>
                    <option value="USD">US Dollar</option>
                    <option value="UZS">Uzbekistan Som</option>
                    <option value="VUV">Vanuatu Vatu</option>
                    <option value="VEF">Venezuelan BolÃ­var</option>
                    <option value="VND">Vietnamese Dong</option>
                    <option value="YER">Yemeni Rial</option>
                    <option value="ZMK">Zambian Kwacha</option>
                </select>
               
                <button class="btn btn-primary">Calculate</button>   
                    
            </form>
            <div class="result" id="result"></div>
            
        </div>
        <div>
            <h6 id="updatetime"></h6>
            <table>
                <tr>
                    <th>Currency Code</th>
                    <th>Value in USD</th>
                </tr>
                <tbody id="tabledata">

                </tbody>
            </table>
        </div>
    </div>



        <?php
        return ob_get_clean();
    }




 }

 if(class_exists('Currency_Pro')){
    $currencypro = new Currency_Pro;
    $currencypro->shortcode();

 }