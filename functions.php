<?php 
function titlecase($word) {
  $word = ucwords($word);
  return $word;
}

function capfirst($word) {
  $word = ucfirst($word);
  return $word;
}

function scionModel($type) {
  if ($type == 'FR-S' || $type == 'FRS' || $type == 'frs' || $type == 'fr-s') {
    $valid = true;
    $description = 'FR-S
    Engine:
2.0 L 4U-GSE/ FA20H4
200  hp (81 kW) @ 7000 rpm 
151 ft·lbf of torque @ 6400 rpm 

';
  } else if ($type == 'iA' || $type =='ia') {
    $valid = true;
    $description =  'iA
    The iA is a fluctuating model with a possibility of these four engines: 
1.3 L ZJ-VE I4 (gasoline)
1.5 L ZY-VE I4 (gasoline)
1.4 L Y4 I4 (diesel)
1.6 L Y6 I4 (diesel)
';
  } 


  else if ($type == 'iM' || $type =='im') {
    $valid = true;
    $description =  'iM
     The iA is a fluctuating model with a possibility of these four engines:
Petrol
1.2L 8NR-FTS VVT-iW 1,196 cc (73.0 cu in) turbocharged[32]
1.33L 1NR-FE 1,329 cc (81.1 cu in)
1.5L 1NZ-FE 1,496 cc (91.3 cu in)
1.6L 1ZR-FAE V-matic 1,598 cc (97.5 cu in)
1.8L 2ZR-FAE V-matic 1,797 cc (109.7 cu in)
Diesel
1.4L D-4D 1,398 cc (85.3 cu in)
Hybrid
1.8L VVT-i 1,798 cc (109.7 cu in) petrol with an electric motor
';
  } 


  else if ($type == 'iQ' || $type =='iq') {
    $valid = true;
    $description = 'xA
    Engine:
1.3 L DOHC I4 
94 hp (70 kW) @ 6000 rpm 
89 ft·lbf (121 Nm) of torque 
<strong>Also:</strong> contains eleven airbags!
 ';
  } 
else if ($type == 'tC' || $type =='tc') {
    $valid = true;
    $description =  'tC
    Engine:
 2.4 L Dual Overhead Cam (DOHC) 16-valve 4-cylinder with VVT-i, compression ratio of 9.6:1 for the 2005/06 models and 9.8:1 for 2007-2010.
 161 hp (120 kW) @ 6000 rpm (2007MY+) / 160 hp (119 kW) @ 5700 rpm (2005-06MY)
 162 lb·ft (220 N·m) @ 4000rpm (2007MY+) / 163 lb·ft (221 N·m) @ 4000 rpm (2005-06MY)

';
  } else if ($type == 'xA' || $type =='xa') {
    $valid = true;
    $description = 'xA
    Engine:
1.5 L DOHC I4 engine.
108 hp (81 kW) @ 6000 rpm (revised to 103 SAE net horsepower in 2006)
105 ft·lbf (142 Nm) of torque @ 4200 rpm (revised to 101 lb·ft (137 N·m) in 2006)

';
  }
else if ($type == 'xB' || $type =='xb') {
    $valid = true;
    $description = 'xB
    Engine:   
1.5 L DOHC I4 engine.
108 hp (81 kW) @ 6000 rpm 
105 ft·lbf (142 Nm) of torque @ 4200 rpm 

';
  } else if ($type == 'xD' || $type =='xd') {
    $valid = true;
    $description = 'xD
    Engine:
1.8 L DOHC 2ZR-FE
128 hp (95kW)
125 ft·lbf (169 Nm) of torque

';
  }
  else {
    $valid = false;
  }

  if ($valid == true) {
    return('
      <div class="card my-4 mx-auto" style="width: 20rem;">
        <img class="img-fluid" src="images/'.$type.'.jpg" alt="Card image cap">
        <div class="card-block">
          <h2 class="h4 card-title">'.($type).'</h2>
          <p class="card-text">'.$description.'
        </div>
      </div>
    ');
  } else {
    return('
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="m-0"><strong>'.($type).' is not a Scion!</strong>
     I have no clue what you&rsquo;re packing under the hood.

      </div>
    ');
  }
}
