<?php


$cities = array(/*01*/
  'Albany' => array('x' => [1073, 62], 'r' => 'NE'),
  /*02*/ 'Atlanta' => array('x' => [944, 341], 'r' => 'SE'),
  /*03*/ 'Baltimore' => array('x' => [1054, 166], 'r' => 'NE'),
  /*04*/ 'Billings' => array('x' => [401, 91], 'r' => 'NW'),
  /*05*/ 'Birmingham' => array('x' => [890, 360], 'r' => 'SC'),
  /*06*/ 'Boston' => array('x' => [1123, 57], 'r' => 'NE'),
  /*07*/ 'Buffalo' => array('x' => [981, 87], 'r' => 'NE'),
  /*08*/ 'Butte' => array('x' => [325, 72], 'r' => 'NW'),
  /*09*/ 'Casper' => array('x' => [445, 164], 'r' => 'NW'),
  /*10*/ 'Charleston' => array('x' => [1052, 347], 'r' => 'SE'),
  /*11*/ 'Charlotte' => array('x' => [1010, 291], 'r' => 'SE'),
  /*12*/ 'Chattanooga' => array('x' => [918, 315], 'r' => 'SE'),
  /*13*/ 'Chicago' => array('x' => [820, 157], 'r' => 'NC'),
  /*14*/ 'Cincinnati' => array('x' => [904, 209], 'r' => 'NC'),
  /*15*/ 'Cleveland' => array('x' => [942, 134], 'r' => 'NC'),
  /*16*/ 'Columbus' => array('x' => [928, 182], 'r' => 'NC'),
  /*17*/ 'Dallas' => array('x' => [668, 414], 'r' => 'SC'),
  /*18*/ 'Denver' => array('x' => [471, 245], 'r' => 'PL'),
  /*19*/ 'Des Moines' => array('x' => [704, 180], 'r' => 'PL'),
  /*20*/ 'Detroit' => array('x' => [905, 117], 'r' => 'NC'),
  /*21*/ 'El Paso' => array('x' => [438, 446], 'r' => 'SW'),
  /*22*/ 'Fargo' => array('x' => [625, 50], 'r' => 'PL'),
  /*23*/ 'Fort Worth' => array('x' => [648, 417], 'r' => 'SC'),
  /*24*/ 'Houston' => array('x' => [708, 487], 'r' => 'SC'),
  /*25*/ 'Indianapolis' => array('x' => [864, 200], 'r' => 'NC'),
  /*26*/ 'Jacksonville' => array('x' => [1030, 411], 'r' => 'SE'),
  /*27*/ 'Kansas City' => array('x' => [692, 250], 'r' => 'PL'),
  /*28*/ 'Knoxville' => array('x' => [939, 288], 'r' => 'SE'),
  /*29*/ 'Las Vegas' => array('x' => [249, 307], 'r' => 'SW'),
  /*30*/ 'Little Rock' => array('x' => [764, 348], 'r' => 'SC'),
  /*31*/ 'Los Angeles' => array('x' => [175, 347], 'r' => 'SW'),
  /*32*/ 'Louisville' => array('x' => [884, 242], 'r' => 'SC'),
  /*33*/ 'Memphis' => array('x' => [812, 333], 'r' => 'SC'),
  /*34*/ 'Miami' => array('x' => [1098, 506], 'r' => 'SE'),
  /*35*/ 'Milwaukee' => array('x' => [804, 123], 'r' => 'NC'),
  /*36*/ 'Minneapolis' => array('x' => [702, 93], 'r' => 'PL'),
  /*37*/ 'Mobile' => array('x' => [875, 431], 'r' => 'SE'),
  /*38*/ 'Nashville' => array('x' => [876, 294], 'r' => 'SC'),
  /*39*/ 'New Orleans' => array('x' => [833, 463], 'r' => 'SC'),
  /*40*/ 'New York' => array('x' => [1090, 114], 'r' => 'NE'),
  /*41*/ 'Norfolk' => array('x' => [1090, 230], 'r' => 'SE'),
  /*42*/ 'Oklahoma City' => array('x' => [645, 347], 'r' => 'PL'),
  /*43*/ 'Omaha' => array('x' => [659, 195], 'r' => 'PL'),
  /*44*/ 'Philadelphia' => array('x' => [1079, 142], 'r' => 'NE'),
  /*45*/ 'Phoenix' => array('x' => [313, 391], 'r' => 'SW'),
  /*46*/ 'Pittsburgh' => array('x' => [982, 158], 'r' => 'NE'),
  /*47*/ 'Pocatello' => array('x' => [315, 150], 'r' => 'NW'),
  /*48*/ 'Portland ME' => array('x' => [1123, 18], 'r' => 'NE'),
  /*49*/ 'Portland OR' => array('x' => [122, 45], 'r' => 'NW'),
  /*50*/ 'Pueblo' => array('x' => [478, 279], 'r' => 'PL'),
  /*51*/ 'Rapid City' => array('x' => [508, 135], 'r' => 'NW'),
  /*52*/ 'Reno' => array('x' => [161, 199], 'r' => 'SW'),
  /*53*/ 'Richmond' => array('x' => [1058, 215], 'r' => 'SE'),
  /*54*/ 'Sacramento' => array('x' => [126, 211], 'r' => 'SW'),
  /*55*/ 'Salt Lake City' => array('x' => [326, 207], 'r' => 'NW'),
  /*56*/ 'San Antonio' => array('x' => [633, 505], 'r' => 'SC'),
  /*57*/ 'San Diego' => array('x' => [194, 381], 'r' => 'SW'),
  /*58*/ 'San Francisco/Oakland' => array('x' => [108, 233], 'r' => 'SW'),
  /*59*/ 'Seattle' => array('x' => [148, 8], 'r' => 'NW'),
  /*60*/ 'Shreveport' => array('x' => [740, 410], 'r' => 'SC'),
  /*61*/ 'Spokane' => array('x' => [241, 20], 'r' => 'NW'),
  /*62*/ 'St. Louis' => array('x' => [789, 244], 'r' => 'NC'),
  // /*63*/ 'St. Paul' => array('x' => [702, 93], 'r' => 'PL'),
  /*64*/ 'Tampa' => array('x' => [1030, 471], 'r' => 'SE'),
  /*65*/ 'Tucumcari' => array('x' => [498, 362], 'r' => 'SW'),
  /*66*/ 'Washington DC' => array('x' => [1052, 184], 'r' => 'NE'),
);

$rails = array(
  'GN' => array('x' => [10, 100], 'r' => 'L1', 'name' => 'Great Northern', 'amount' => 17000, 'stops' => array(
    // A-line
    '#Seattle' => ['A1'],
    'A1' => [173, 7, '#Seattle', 'A2'],
    'A2' => [204, 20, 'A1', '#Spokane'],
    '#Spokane' => ['A2', 'B1', 'A4'],
    'A3' => [262, 7, '#Spokane'],
    'A4' => [284, 8, 'A3', 'A5'],
    'A5' => [307, 11, 'A4', 'A6'],
    'A6' => [329, 10, 'A5', 'A7'],
    'A7' => [352, 12, 'A6', 'A8'],
    'A8' => [388, 13, 'A7', 'A9'],
    'A9' => [417, 17, 'A8', 'A10'],
    'A10' => [444, 25, 'A9', 'A11'],
    'A11' => [476, 30, 'A10', 'A12'],
    'A12' => [503, 23, 'A11', 'A13', 'C1'], //branch
    'A13' => [535, 21, 'A12', 'A14'],
    'A14' => [563, 30, 'A13', 'A15'],
    'A15' => [587, 37, 'A14', 'A16'],
    'A16' => [608, 42, 'A15', '#Fargo'],
    '#Fargo' => ['F16', 'A17'],
    'A17' => [646, 70, '#Fargo'],
    'A18' => [673, 81, '', ''],
    '#Minneapolis' => null,
    // B-line
    'B1' => [220, 37, '#Spokane'],
    'B2' => [196, 53, 'B1', 'B3', 'UP:??'],
    'B3' => [159, 51, '#Portland OR', 'B2', 'B4', 'UP:??'],
    '#Portland OR' => null,
    'B4' => [151, 77, 'B3', 'B5'],
    'B5' => [132, 99, 'B4', 'B6'],
    'B6' => [131, 126, 'B5', 'B7'],
    'B7' => [137, 154, 'B6', '$'],
    // C-line
    'C1' => [355, 36, ''],
    'C2' => [340, 51, ''],
    // D-line
    'D1' => [488, 45, ''],
  )),
  'NP' => array('x' => [10, 165], 'r' => 'L1', 'name' => 'Northern Pacific', 'amount' => 14000, 'stops' => array(
    // A-line
    '#Seattle' => null,
    'A1' => [174, 22, '#Seattle'],
    'A2' => [189, 42],
    'A3' => [211, 30],
    '#Spokane' => null,
    'A4' => [262, 7],
    'A5' => [277, 18],
    'A6' => [295, 35],
    'A7' => [314, 51],
    'A8' => [350, 80],
    'A9' => [377, 81],
    '#Billings' => null,
    'A10' => [439, 76],
    'A11' => [472, 65],
    'A12' => [496, 57],
    'A13' => [522, 56],
    'A14' => [547, 56],
    'A15' => [579, 55],
    '#Fargo' => null,
    'A16' => [604, 51],
    'A17' => [655, 58],
    'A17' => [674, 81, '$'],
    '#Minneapolis' => null,
  )),
  'SLSF' => array('x' => [10, 232], 'r' => 'L1', 'name' => 'St. Louis and San Francisco', 'amount' => 19000, 'stops' => array(
    // A-line
    '#Kansas City' => null,
    'A1' => [692, 268, '#Kansas City', 'A2'],
    'A2' => [704, 286, 'A1', 'A3'],
    'A3' => [731, 290, 'A2', 'A4'],
    'A4' => [755, 291, 'A3', 'A5'],
    'A5' => [773, 304, 'A4', 'A6'],
    'A6' => [791, 312, 'A5', 'A7'],
    '#Memphis' => null,
    'A7' => [841, 348, '#Memphis', 'A8'],
    'A8' => [865, 356, 'A7', '#Birmingham'],
    '#Birmingham' => null,
    // B-line
    '#St. Louis' => null,
    'B1' => [772, 264, '#St. Louis', 'B2'],
    'B2' => [751, 273, 'B1', 'B3'],
    'B3' => [713, 303],
    'B4' => [714, 329],
    'B5' => [703, 354],
    'B6' => [688, 376],
    'B7' => [685, 397],
    '#Dallas' => null,
    '#Fort Worth' => null,
    // C-line
    'C1' => [686, 314, 'B3', 'C2'],
    'C2' => [668, 333, 'B1', '#Oklahoma City'],
    '#Oklahoma City' => null,
  )),
  'WP' => array('x' => [10, 287], 'r' => 'L1', 'name' => 'Western Pacific', 'amount' => 8000, 'stops' => array(
    // A-line
    '#Sacramento' => null,
    'A1' => [129, 190],
    'A2' => [155, 182],
    '#Reno' => null,
    'A3' => [194, 176],
    'A4' => [228, 189],
    'A5' => [266, 188],
    'A6' => [299, 202],
    '#Salt Lake City' => null,
    // B-line
    'B1' => [138, 155],
    'B2' => [137, 176],
    // C-line
    'C1' => [133, 232],
  )),
  'UP' => array('x' => [10, 340], 'r' => 'L1', 'name' => 'Union Pacific', 'amount' => 40000, 'stops' => array()),
  'CRI+P' => array('x' => [10, 397], 'r' => 'L1', 'name' => 'Chicago, Rock Island, and Pacific', 'amount' => 29000, 'stops' => array()),
  'D+RGW' => array('x' => [10, 456], 'r' => 'L1', 'name' => 'Denver and Rio Grande Western', 'amount' => 6000, 'stops' => array()),
  //
  'SP' => array('x' => [10, 522], 'r' => 'L1', 'name' => 'Southern Pacific', 'amount' => 42000, 'stops' => array()),
  'GM+O' => array('x' => [92, 522], 'r' => 'L1', 'name' => 'Gulf, Mobile, and Ohio', 'amount' => 12000, 'stops' => array()),
  'N+W' => array('x' => [158, 522], 'r' => 'L1', 'name' => 'Norfolk and Western', 'amount' => 12000, 'stops' => array()),
  'CMStP+P' => array('x' => [236, 522], 'r' => 'L1', 'name' => 'Chicago, Milwaukee, St. Paul, and Pacific', 'amount' => 18000, 'stops' => array()),
  'T+P' => array('x' => [317, 522], 'r' => 'L1', 'name' => 'Texas and Pacific', 'amount' => 10000, 'stops' => array()),
  'L+N' => array('x' => [399, 522], 'r' => 'L1', 'name' => 'Louisville and Nashville', 'amount' => 18000, 'stops' => array()),
  'C+NW' => array('x' => [463, 522], 'r' => 'L1', 'name' => 'Chicago and NorthWestern RR', 'amount' => 14000, 'stops' => array()),
  'AT+SF' => array('x' => [520, 522], 'r' => 'L1', 'name' => 'Atchison, Topeka, and Santa Fe RR', 'amount' => 40000, 'stops' => array()),
  'MP' => array('x' => [712, 522], 'r' => 'L1', 'name' => 'Missouri Pacific', 'amount' => 21000, 'stops' => array()),
  'IC' => array('x' => [800, 522], 'r' => 'L1', 'name' => 'Illinois Central RR', 'amount' => 14000, 'stops' => array()),
  'CB+Q' => array('x' => [880, 522], 'r' => 'L1', 'name' => 'Chicago, Burlington, and Quincy', 'amount' => 20000, 'stops' => array()),
  'RF+P' => array('x' => [950, 522], 'r' => 'L1', 'name' => 'Richmond, Fredericksburg, and Potomac RR', 'amount' => 4000, 'stops' => array()),
  'SAL' => array('x' => [1014, 522], 'r' => 'L1', 'name' => 'Seaboard Airline RR', 'amount' => 14000, 'stops' => array()),
  'SOU' => array('x' => [1115, 522], 'r' => 'L1', 'name' => 'Southern Railway', 'amount' => 20000, 'stops' => array()),
  //
  'ACL' => array('x' => [1115, 453], 'r' => 'L1', 'name' => 'Atlantic Coast Line', 'amount' => 12000, 'stops' => array()),
  'C+O' => array('x' => [1115, 400], 'r' => 'L1', 'name' => 'Chesapeake and Ohio', 'amount' => 20000, 'stops' => array()),
  'B+O' => array('x' => [1115, 336], 'r' => 'L1', 'name' => 'Baltimore and Ohio', 'amount' => 24000, 'stops' => array()),
  'NYNH+H' => array('x' => [1115, 266], 'r' => 'L1', 'name' => 'New York, New Haven, and Hartford RR', 'amount' => 4000, 'stops' => array()),
  'B+M' => array('x' => [1115, 191], 'r' => 'L1', 'name' => 'Boston and Maine RR', 'amount' => 4000, 'stops' => array()),
  'PA' => array('x' => [1115, 133], 'r' => 'L1', 'name' => 'Pennsylvania RR', 'amount' => 30000, 'stops' => array()),
  'NYC' => array('x' => [1115, 88], 'r' => 'L1', 'name' => 'New York Central', 'amount' => 28000, 'stops' => array()),
);

return [$rails, $cities];
