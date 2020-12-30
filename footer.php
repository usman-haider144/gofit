<?php

/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<?php wp_footer(); ?>
<script>
	jQuery(document).ready(function ($) {
		jQuery('.catalog-filter__filters label input').val(function (index, val) {
			return '.' + val;
		});

		jQuery("input#checkbox-gift-card").attr("checked", true);

		jQuery('#catMobButton').on('click', function (e) {
			e.stopPropagation();
			jQuery('.cat-mob-sidebar').addClass('open');
		});
		jQuery('.cat-mob-sidebar #close').on('click', function (e) {
			e.stopPropagation();
			jQuery('.cat-mob-sidebar').removeClass('open');
		});

		jQuery('.cat-mob-sidebar').click(function (e) {
			e.stopPropagation();
		});

		jQuery('body').click(function (e) {
			if (jQuery('.cat-mob-sidebar').hasClass('open')) {
				e.stopPropagation();
				jQuery('.cat-mob-sidebar').removeClass('open');
			}
		});


		// jQuery('ul.catalog-filter-country :checkbox').on('change', function() {
		// 	var li = jQuery(this).closest('li');
		// 	var ul = jQuery('ul.catalog-filter-country')
		// 	if (this.checked) {
		// 		ul.prepend(li)
		// 	} else {
		// 		ul.append(li)
		// 	}
		// });


		// Events
		$('.dropdown-container')
			.on('click', '.dropdown-button', function () {
				$(this).siblings('.dropdown-list').toggle();
			})
			.on('input', '.dropdown-search', function () {
				var target = $(this);
				var dropdownList = target.closest('.dropdown-list');
				var search = target.val().toLowerCase();

				if (!search) {
					dropdownList.find('li').show();
					return false;
				}

				dropdownList.find('li').each(function () {
					var text = $(this).text().toLowerCase();
					var match = text.indexOf(search) > -1;
					$(this).toggle(match);
				});
			})
			.on('change', '[type="checkbox"]', function () {
				var container = $(this).closest('.dropdown-container');
				var checked = container.find('[type="checkbox"]:checked');
				var numChecked = checked.length;
				container.find('.quantity').text(numChecked || 'Any');
				// for( j = 0; j < checked.length; j++ ) {
				// 	let c = checked[j];
				// 	let n = jQuery(c).attr("name");
				// 	for( let i = 0; i < usStates.length; i++) {
				// 		if( usStates[i].abbreviation === n ) {
				// 			usStates[i].selected = 1;
				// 			console.log("checked === ", n, "===" );
				// 		}
				// 	}
				// }
				// // console.log("checked === ", n, "===" );
				// console.log(usStates);
				// usNewFunction();

				// console.log(checked.val());


			});

		// JSON of States for demo purposes
		var usStates = [{
				name: "Afghanistan",
				abbreviation: "AF",
				selected: 0,
			},
			{
				name: "Åland Islands",
				abbreviation: "AX",
				selected: 0
			},
			{
				name: "Albania",
				abbreviation: "AL",
				selected: 0
			},
			{
				name: "Algeria",
				abbreviation: "DZ",
				selected: 0
			},
			{
				name: "American Samoa",
				abbreviation: "AS",
				selected: 0
			},
			{
				name: "Andorra",
				abbreviation: "AD",
				selected: 0
			},
			{
				name: "Angola",
				abbreviation: "AO",
				selected: 0
			},
			{
				name: "Anguilla",
				abbreviation: "AI",
				selected: 0
			},
			{
				name: "Antarctica",
				abbreviation: "AQ",
				selected: 0
			},
			{
				name: "Antigua & Barbuda",
				abbreviation: "AG",
				selected: 0
			},
			{
				name: "Argentina",
				abbreviation: "AR",
				selected: 0
			},
			{
				name: "Armenia",
				abbreviation: "AM",
				selected: 0
			},
			{
				name: "Aruba",
				abbreviation: "AW",
				selected: 0
			},
			{
				name: "Australia",
				abbreviation: "AU",
				selected: 0
			},
			{
				name: "Austria",
				abbreviation: "AT",
				selected: 0
			},
			{
				name: "Azerbaijan",
				abbreviation: "AZ",
				selected: 0
			},
			{
				name: "Bahrain",
				abbreviation: "BH",
				selected: 0
			},
			{
				name: "Bangladesh",
				abbreviation: "BD",
				selected: 0
			},
			{
				name: "Belgium",
				abbreviation: "BE",
				selected: 0
			},
			{
				name: "Belize",
				abbreviation: "BZ",
				selected: 0
			},
			{
				name: "Bermuda",
				abbreviation: "BM",
				selected: 0
			},
			{
				name: "Bhutan",
				abbreviation: "BT",
				selected: 0
			},
			{
				name: "Bolivia",
				abbreviation: "BO",
				selected: 0
			},
			{
				name: "Bosnia & Herzegovina",
				abbreviation: "BA",
				selected: 0
			},
			{
				name: "Botswana",
				abbreviation: "BW",
				selected: 0
			},
			{
				name: "Bouvet Island",
				abbreviation: "BV",
				selected: 0
			},
			{
				name: "Brazil",
				abbreviation: "BR",
				selected: 0
			},
			{
				name: "British Indian Ocean Territory",
				abbreviation: "IO",
				selected: 0
			},
			{
				name: "British Virgin Islands",
				abbreviation: "VG",
				selected: 0
			},
			{
				name: "Brunei",
				abbreviation: "BN",
				selected: 0
			},
			{
				name: "Bulgaria",
				abbreviation: "BG",
				selected: 0
			},
			{
				name: "Cameroon",
				abbreviation: "CM",
				selected: 0
			},
			{
				name: "Canada",
				abbreviation: "CA",
				selected: 0
			},
			{
				name: "Cape Verde",
				abbreviation: "CV",
				selected: 0
			},
			{
				name: "Caribbean Netherlands",
				abbreviation: "BQ",
				selected: 0
			},
			{
				name: "Chile",
				abbreviation: "CL",
				selected: 0
			},
			{
				name: "China",
				abbreviation: "CN",
				selected: 0
			},
			{
				name: "Christmas Island",
				abbreviation: "CX",
				selected: 0
			},
			{
				name: "Cocos (Keeling) Islands",
				abbreviation: "CC",
				selected: 0
			},
			{
				name: "Cook Islands",
				abbreviation: "CK",
				selected: 0
			},
			{
				name: "Costa Rica",
				abbreviation: "CR",
				selected: 0
			},
			{
				name: "Croatia",
				abbreviation: "HR",
				selected: 0
			},
			{
				name: "Curaçao",
				abbreviation: "CW",
				selected: 0
			},
			{
				name: "Cyprus",
				abbreviation: "CY",
				selected: 0
			},
			{
				name: "Czechia",
				abbreviation: "CZ",
				selected: 0
			},
			{
				name: "Denmark",
				abbreviation: "DK",
				selected: 0
			},
			{
				name: "Djibouti",
				abbreviation: "DJ",
				selected: 0
			},
			{
				name: "Dominica",
				abbreviation: "DM",
				selected: 0
			},
			{
				name: "Ecuador",
				abbreviation: "EC",
				selected: 0
			},
			{
				name: "Egypt",
				abbreviation: "EG",
				selected: 0
			},
			{
				name: "El Salvador",
				abbreviation: "SV",
				selected: 0
			},
			{
				name: "Estonia",
				abbreviation: "EE",
				selected: 0
			},
			{
				name: "Eswatini",
				abbreviation: "SZ",
				selected: 0
			},
			{
				name: "Ethiopia",
				abbreviation: "ET",
				selected: 0
			},
			{
				name: "Falkland Islands",
				abbreviation: "FK",
				selected: 0
			},
			{
				name: "Faroe Islands",
				abbreviation: "FO",
				selected: 0
			},
			{
				name: "Fiji",
				abbreviation: "FJ",
				selected: 0
			},
			{
				name: "Finland",
				abbreviation: "FI",
				selected: 0
			},
			{
				name: "France",
				abbreviation: "FR",
				selected: 0
			},
			{
				name: "French Guiana",
				abbreviation: "GF",
				selected: 0
			},
			{
				name: "French Polynesia",
				abbreviation: "PF",
				selected: 0
			},
			{
				name: "French Southern Territories",
				abbreviation: "TF",
				selected: 0
			},
			{
				name: "Gabon",
				abbreviation: "GA",
				selected: 0
			},
			{
				name: "Gambia",
				abbreviation: "GM",
				selected: 0
			},
			{
				name: "Georgia",
				abbreviation: "GE",
				selected: 0
			},
			{
				name: "Germany",
				abbreviation: "DE",
				selected: 0
			},
			{
				name: "Ghana",
				abbreviation: "GH",
				selected: 0
			},
			{
				name: "Gibraltar",
				abbreviation: "GI",
				selected: 0
			},
			{
				name: "Greece",
				abbreviation: "GR",
				selected: 0
			},
			{
				name: "Greenland",
				abbreviation: "GL",
				selected: 0
			},
			{
				name: "Grenada",
				abbreviation: "GD",
				selected: 0
			},
			{
				name: "Guadeloupe",
				abbreviation: "GP",
				selected: 0
			},
			{
				name: "Guam",
				abbreviation: "GU",
				selected: 0
			},
			{
				name: "Guatemala",
				abbreviation: "GT",
				selected: 0
			},
			{
				name: "Guernsey",
				abbreviation: "GG",
				selected: 0
			},
			{
				name: "Guyana",
				abbreviation: "GY",
				selected: 0
			},
			{
				name: "Heard & McDonald Islands",
				abbreviation: "HM",
				selected: 0
			},
			{
				name: "Honduras",
				abbreviation: "HN",
				selected: 0
			},
			{
				name: "Hong Kong SAR China",
				abbreviation: "HK",
				selected: 0
			},
			{
				name: "Hungary",
				abbreviation: "HU",
				selected: 0
			},
			{
				name: "Iceland",
				abbreviation: "IS",
				selected: 0
			},
			{
				name: "India",
				abbreviation: "IN",
				selected: 0
			},
			{
				name: "Indonesia",
				abbreviation: "ID",
				selected: 0
			},
			{
				name: "Iraq",
				abbreviation: "IQ",
				selected: 0
			},
			{
				name: "Ireland",
				abbreviation: "IE",
				selected: 0
			},
			{
				name: "Isle of Man",
				abbreviation: "IM",
				selected: 0
			},
			{
				name: "Israel",
				abbreviation: "IL",
				selected: 0
			},
			{
				name: "Italy",
				abbreviation: "IT",
				selected: 0
			},
			{
				name: "Jamaica",
				abbreviation: "JM",
				selected: 0
			},
			{
				name: "Japan",
				abbreviation: "JP",
				selected: 0
			},
			{
				name: "Jersey",
				abbreviation: "JE",
				selected: 0
			},
			{
				name: "Jordan",
				abbreviation: "JO",
				selected: 0
			},
			{
				name: "Kazakhstan",
				abbreviation: "KZ",
				selected: 0
			},
			{
				name: "Kenya",
				abbreviation: "KE",
				selected: 0
			},
			{
				name: "Kuwait",
				abbreviation: "KW",
				selected: 0
			},
			{
				name: "Kyrgyzstan",
				abbreviation: "KG",
				selected: 0
			},
			{
				name: "Latvia",
				abbreviation: "LV",
				selected: 0
			},
			{
				name: "Liberia",
				abbreviation: "LR",
				selected: 0
			},
			{
				name: "Libya",
				abbreviation: "LY",
				selected: 0
			},
			{
				name: "Liechtenstein",
				abbreviation: "LI",
				selected: 0
			},
			{
				name: "Lithuania",
				abbreviation: "LT",
				selected: 0
			},
			{
				name: "Luxembourg",
				abbreviation: "LU",
				selected: 0
			},
			{
				name: "Macao SAR China",
				abbreviation: "MO",
				selected: 0
			},
			{
				name: "Malawi",
				abbreviation: "MW",
				selected: 0
			},
			{
				name: "Malaysia",
				abbreviation: "MY",
				selected: 0
			},
			{
				name: "Maldives",
				abbreviation: "MV",
				selected: 0
			},
			{
				name: "Mali",
				abbreviation: "ML",
				selected: 0
			},
			{
				name: "Malta",
				abbreviation: "MT",
				selected: 0
			},
			{
				name: "Marshall Islands",
				abbreviation: "MH",
				selected: 0
			},
			{
				name: "Martinique",
				abbreviation: "MQ",
				selected: 0
			},
			{
				name: "Mauritania",
				abbreviation: "MR",
				selected: 0
			},
			{
				name: "Mauritius",
				abbreviation: "MU",
				selected: 0
			},
			{
				name: "Mayotte",
				abbreviation: "YT",
				selected: 0
			},
			{
				name: "Mexico",
				abbreviation: "MX",
				selected: 0
			},
			{
				name: "Micronesia",
				abbreviation: "FM",
				selected: 0
			},
			{
				name: "Moldova",
				abbreviation: "MD",
				selected: 0
			},
			{
				name: "Monaco",
				abbreviation: "MC",
				selected: 0
			},
			{
				name: "Mongolia",
				abbreviation: "MN",
				selected: 0
			},
			{
				name: "Montenegro",
				abbreviation: "ME",
				selected: 0
			},
			{
				name: "Montserrat",
				abbreviation: "MS",
				selected: 0
			},
			{
				name: "Morocco",
				abbreviation: "MA",
				selected: 0
			},
			{
				name: "Mozambique",
				abbreviation: "MZ",
				selected: 0
			},
			{
				name: "Myanmar (Burma)",
				abbreviation: "MM",
				selected: 0
			},
			{
				name: "Namibia",
				abbreviation: "NA",
				selected: 0
			},
			{
				name: "Nauru",
				abbreviation: "NR",
				selected: 0
			},
			{
				name: "Nepal",
				abbreviation: "NP",
				selected: 0
			},
			{
				name: "Netherlands",
				abbreviation: "NL",
				selected: 0
			},
			{
				name: "New Caledonia",
				abbreviation: "NC",
				selected: 0
			},
			{
				name: "New Zealand",
				abbreviation: "NZ",
				selected: 0
			},
			{
				name: "Niger",
				abbreviation: "NE",
				selected: 0
			},
			{
				name: "Nigeria",
				abbreviation: "NG",
				selected: 0
			},
			{
				name: "Niue",
				abbreviation: "NU",
				selected: 0
			},
			{
				name: "Norfolk Island",
				abbreviation: "NF",
				selected: 0
			},
			{
				name: "North Macedonia",
				abbreviation: "MK",
				selected: 0
			},
			{
				name: "Northern Mariana Islands",
				abbreviation: "MP",
				selected: 0
			},
			{
				name: "Norway",
				abbreviation: "NO",
				selected: 0
			},
			{
				name: "Oman",
				abbreviation: "OM",
				selected: 0
			},
			{
				name: "Pakistan",
				abbreviation: "PK",
				selected: 0
			},
			{
				name: "Palau",
				abbreviation: "PW",
				selected: 0
			},
			{
				name: "Palestinian Territories",
				abbreviation: "PS",
				selected: 0
			},
			{
				name: "Papua New Guinea",
				abbreviation: "PG",
				selected: 0
			},
			{
				name: "Paraguay",
				abbreviation: "PY",
				selected: 0
			},
			{
				name: "Peru",
				abbreviation: "PE",
				selected: 0
			},
			{
				name: "Philippines",
				abbreviation: "PH",
				selected: 0
			},
			{
				name: "Pitcairn Islands",
				abbreviation: "PN",
				selected: 0
			},
			{
				name: "Poland",
				abbreviation: "PL",
				selected: 0
			},
			{
				name: "Portugal",
				abbreviation: "PT",
				selected: 0
			},
			{
				name: "Puerto Rico",
				abbreviation: "PR",
				selected: 0
			},
			{
				name: "Qatar",
				abbreviation: "QA",
				selected: 0
			},
			{
				name: "Réunion",
				abbreviation: "RE",
				selected: 0
			},
			{
				name: "Romania",
				abbreviation: "RO",
				selected: 0
			},
			{
				name: "Russia",
				abbreviation: "RU",
				selected: 0
			},
			{
				name: "Rwanda",
				abbreviation: "RW",
				selected: 0
			},
			{
				name: "Samoa",
				abbreviation: "WS",
				selected: 0
			},
			{
				name: "San Marino",
				abbreviation: "SM",
				selected: 0
			},
			{
				name: "São Tomé & Príncipe",
				abbreviation: "ST",
				selected: 0
			},
			{
				name: "Saudi Arabia",
				abbreviation: "SA",
				selected: 0
			},
			{
				name: "Senegal",
				abbreviation: "SN",
				selected: 0
			},
			{
				name: "Serbia",
				abbreviation: "RS",
				selected: 0
			},
			{
				name: "Seychelles",
				abbreviation: "SC",
				selected: 0
			},
			{
				name: "Sierra Leone",
				abbreviation: "SL",
				selected: 0
			},
			{
				name: "Singapore",
				abbreviation: "SG",
				selected: 0
			},
			{
				name: "Sint Maarten",
				abbreviation: "SX",
				selected: 0
			},
			{
				name: "Slovakia",
				abbreviation: "SK",
				selected: 0
			},
			{
				name: "Slovenia",
				abbreviation: "SI",
				selected: 0
			},
			{
				name: "Solomon Islands",
				abbreviation: "SB",
				selected: 0
			},
			{
				name: "South Africa",
				abbreviation: "ZA",
				selected: 0
			},
			{
				name: "South Georgia & South Sandwich Islands",
				abbreviation: "GS",
				selected: 0
			},
			{
				name: "South Korea",
				abbreviation: "KR",
				selected: 0
			},
			{
				name: "Spain",
				abbreviation: "ES",
				selected: 0
			},
			{
				name: "Sri Lanka",
				abbreviation: "LK",
				selected: 0
			},
			{
				name: "St. Barthélemy",
				abbreviation: "BL",
				selected: 0
			},
			{
				name: "St. Helena",
				abbreviation: "SH",
				selected: 0
			},
			{
				name: "St. Kitts & Nevis",
				abbreviation: "KN",
				selected: 0
			},
			{
				name: "St. Lucia",
				abbreviation: "LC",
				selected: 0
			},
			{
				name: "St. Martin",
				abbreviation: "MF",
				selected: 0
			},
			{
				name: "St. Pierre & Miquelon",
				abbreviation: "PM",
				selected: 0
			},
			{
				name: "St. Vincent & Grenadines",
				abbreviation: "VC",
				selected: 0
			},
			{
				name: "Suriname",
				abbreviation: "SR",
				selected: 0
			},
			{
				name: "Svalbard & Jan Mayen",
				abbreviation: "SJ",
				selected: 0
			},
			{
				name: "Sweden",
				abbreviation: "SE",
				selected: 0
			},
			{
				name: "Switzerland",
				abbreviation: "CH",
				selected: 0
			},
			{
				name: "Taiwan",
				abbreviation: "TW",
				selected: 0
			},
			{
				name: "Tajikistan",
				abbreviation: "TJ",
				selected: 0
			},
			{
				name: "Tanzania",
				abbreviation: "TZ",
				selected: 0
			},
			{
				name: "Thailand",
				abbreviation: "TH",
				selected: 0
			},
			{
				name: "Timor-Leste",
				abbreviation: "TL",
				selected: 0
			},
			{
				name: "Togo",
				abbreviation: "TG",
				selected: 0
			},
			{
				name: "Tokelau",
				abbreviation: "TK",
				selected: 0
			},
			{
				name: "Tonga",
				abbreviation: "TO",
				selected: 0
			},
			{
				name: "Trinidad & Tobago",
				abbreviation: "TT",
				selected: 0
			},
			{
				name: "Tunisia",
				abbreviation: "TN",
				selected: 0
			},
			{
				name: "Turkey",
				abbreviation: "TR",
				selected: 0
			},
			{
				name: "Turkmenistan",
				abbreviation: "TM",
				selected: 0
			},
			{
				name: "Turks & Caicos Islands",
				abbreviation: "TC",
				selected: 0
			},
			{
				name: "Tuvalu",
				abbreviation: "TV",
				selected: 0
			},
			{
				name: "U.S. Outlying Islands",
				abbreviation: "UM",
				selected: 0
			},
			{
				name: "U.S. Virgin Islands",
				abbreviation: "VI",
				selected: 0
			},
			{
				name: "United Arab Emirates",
				abbreviation: "AE",
				selected: 0
			},
			{
				name: "United Kingdom",
				abbreviation: "UK",
				selected: 0
			},
			{
				name: "Uruguay",
				abbreviation: "UY",
				selected: 0
			},
			{
				name: "USA",
				abbreviation: "US",
				selected: 1
			},
			{
				name: "Uzbekistan",
				abbreviation: "UZ",
				selected: 0
			},
			{
				name: "Vanuatu",
				abbreviation: "VU",
				selected: 0
			},
			{
				name: "Vatican City",
				abbreviation: "VA",
				selected: 0
			},
			{
				name: "Vietnam",
				abbreviation: "VN",
				selected: 0
			},
			{
				name: "Wallis & Futuna",
				abbreviation: "WF",
				selected: 0
			},
			{
				name: "Western Sahara",
				abbreviation: "EH",
				selected: 0
			},
			{
				name: "Zambia",
				abbreviation: "ZM",
				selected: 0
			}
		];

		// <li> template
		var stateTemplate = _.template(
			'<li class="catalog-filter__filter"><label class="catalog-filter__filter-name">' +
			'<input id="checkbox-<%= abbreviation %>" name="<%= abbreviation %>" value=".<%= abbreviation %>" aria-label="<%= capName %>" type="checkbox" class="catalog-filter__filter-box catalog-filter__filter-box--country">' +
			'<span class="catalog-filter__filter-text"><%= capName %></span>' +
			'</label></li>'
		);

		usStates.sort(function (a, b) {
			return b.selected - a.selected;
		});
		// console.log(usStates);
		// Populate list with states
		_.each(usStates, function (s) {
			s.capName = _.startCase(s.name.toLowerCase());
			// $('.dropdown-list > ul').empty();
			$('.dropdown-list > ul').append(stateTemplate(s));
			$("input#checkbox-US").attr("checked", true);
		});
	});

	// 
	jQuery(function ($) {
		var $container = $('.rewards-container').isotope({
			layoutMode: 'fitRows',
			itemSelector: '.reward',
		});
		var $checkboxes = $('.catalog-filter__filters label input');

		var joinFilters1 = ".gift-card.US";
		$container.isotope({
			filter: joinFilters1
		});
		// console.log(joinFilters1);

		$checkboxes.change(function () {
			var filters1 = [];
			var filters2 = [];
			var filters3 = [];
			$checkboxes.filter('ul.catalog-filter-category :checked').each(function () {
				filters1.push(this.value);
			});
			$checkboxes.filter('ul.catalog-filter-currency :checked').each(function () {
				filters2.push(this.value);
			});
			$checkboxes.filter('ul.catalog-filter-country :checked').each(function () {
				filters3.push(this.value);
			});

			let jjjj = [];
			let kkkk = "";

			if (filters1.length > 0 && filters2.length > 0 && filters3.length > 0) {
				for (let i = 0; i < filters1.length; i++) {
					for (let j = 0; j < filters2.length; j++) {
						for (let k = 0; k < filters3.length; k++) {
							jjjj.push(filters1[i] + filters2[j] + filters3[k]);
						}
					}
				}
			} else if (filters1.length > 0 && filters2.length > 0) {
				for (let i = 0; i < filters1.length; i++) {
					for (let j = 0; j < filters2.length; j++) {
						jjjj.push(filters1[i] + filters2[j]);
					}
				}
			} else if (filters1.length > 0 && filters3.length > 0) {
				for (let i = 0; i < filters1.length; i++) {
					for (let j = 0; j < filters3.length; j++) {
						jjjj.push(filters1[i] + filters3[j]);
					}
				}
			} else if (filters3.length > 0 && filters2.length > 0) {
				for (let i = 0; i < filters3.length; i++) {
					for (let j = 0; j < filters2.length; j++) {
						jjjj.push(filters3[i] + filters2[j]);
					}
				}
			} else if (filters1.length > 0) {
				for (let i = 0; i < filters1.length; i++) {
					jjjj.push(filters1[i]);
				}
			} else if (filters2.length > 0) {
				for (let i = 0; i < filters2.length; i++) {
					jjjj.push(filters2[i]);
				}
			} else if (filters3.length > 0) {
				for (let i = 0; i < filters3.length; i++) {
					jjjj.push(filters3[i]);
				}
			}

			// console.log(joinFilters1);

			joinFilters1 = jjjj.join(', ');
			// var joinFilters2 = filters2.join(', ');
			// var joinFilters3 = filters3.join(', ');

			// var joinFilters = (joinFilters1, joinFilters2, joinFilters3);

			$container.isotope({
				filter: joinFilters1
			});
			// display message box if no filtered items
			if (!$container.data('isotope').filteredItems.length) {
				if (jQuery('.no-result-text').hasClass('d-none')) {
					jQuery('.no-result-text').removeClass('d-none');
				}
			} else {
				jQuery('.no-result-text').addClass('d-none');
			}
			// console.log(joinFilters1);
		});
	});
</script>

</body>

</html>