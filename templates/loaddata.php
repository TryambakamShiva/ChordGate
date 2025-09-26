<html>
<head>
<script src="chords.js"></script>
</head>
<body>
<br><br>



<?php
 $serverName = "localhost";
 $username = "root";
 $password = "";
 $databaseName = "dbnew";
 
 $Conn2 = new mysqli($serverName, $username, $password, $databaseName);
 if ($Conn2->connect_error) {
     die ($Conn2->connect_error);
     $Conn2->Close();
 }
 ?>

<?php 


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["variableName"])) {
    $receivedVariable = $_POST["variableName"];
    $receivedVariable2 = $_POST["variableName"];
    $tags = explode(",", $receivedVariable2);
    $myArray1 = [];
    $myArray2 = [];
    for($x = 0; $x < count($tags); $x += 2) {
        $myArray1[] = $tags[$x];
        
    }
    $myArray3 = implode(',', $myArray1);

    for($x1 = 1; $x1 < count($tags); $x1 += 2) {
        $myArray2[] = $tags[$x1];
        
    }
     
    $myArray4 = implode(',', $myArray2);


    mysqli_query($Conn2,"INSERT INTO `gchords` (`result`,`gchord`,`time_st`) VALUES ('" . $receivedVariable . "','" . $myArray3 . "','" . $myArray4 . "')");
    

    echo '<center><label style = "background-color: azure; color: black; font-weight:bold; font-size: 28px;"> Chords: </label></center> <br><br>';

    foreach ($myArray1 as $chords) {
        echo '
        <label style = "background-color: azure; color: brown;">  "'.$chords.'"  </label>
        ';
    }
    
    echo '<br><br><br><br>';
    echo '<center><label style = "background-color: azure; color: brown; font-weight:bold; font-size: 28px;"> Timestamp: </label> </center><br><br>';


    foreach ($myArray2 as $timestamps) {
        echo '
        <label style = "background-color: azure; color: black;">  "'.$timestamps.'"  </label>
        ';
    }
    
    echo '<br><br><br><br>';
    echo '<center><label style = "background-color: azure; color: brown; font-weight:bold; font-size: 26px;"> Chord Diagram (Some Chord-Diagrams may be Missing, because of lack of Database)
    <br> (Codes for Chord Diagram Database is being gradually created)
    </label><br>
    <label style = "background-color: azure; color: black; font-weight:bold; font-size: 21px;"> 
    (N.B. Some Chord Diagrams may not necessarily be Correct and subjected to rectification) <br>
    (N -- Stands for No Chord.)
    </label><br>
    <center><br><br>';
if (!empty($receivedVariable)){

//---------------  Following Code is Based on ChordJS by acspike ( https://github.com/acspike/ChordJS ) -------------//
// MIT License

// Copyright (c) 2018 Aaron C Spike

// Permission is hereby granted, free of charge, to any person obtaining a copy
// of this software and associated documentation files (the "Software"), to deal
// in the Software without restriction, including without limitation the rights
// to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
// copies of the Software, and to permit persons to whom the Software is
// furnished to do so, subject to the following conditions:

// The above copyright notice and this permission notice shall be included in all
// copies or substantial portions of the Software.

// THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
// IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
// FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
// AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
// LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
// OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
// SOFTWARE.
//--------------------------------------------//

    foreach ($myArray1 as $x3) {
        if($x3 == 'A'){
echo'
         <chord name="A" positions="X02220" fingers="--123-" size="4" ></chord>';
        }
        if($x3 == 'A#'){
            echo'
        <chord name="A#" positions="X13331" fingers="-12341" size="4" ></chord>';
                    }
        if($x3 == 'Ab'){
                        echo'
        <chord name="Ab" positions="466544" fingers="134211" size="4" ></chord>';
                        }                
         
        if($x3 == 'B'){
                echo'
         <chord name="B" positions="X24442" fingers="-12341" size="4" ></chord>';
                    }
        if($x3 == 'Bb'){
               echo'
        <chord name="Bb" positions="X13331" fingers="-12341" size="4" ></chord>';
                   }
        if($x3 == 'C'){
              echo'
        <chord name="C" positions="X32010" fingers="-32-1-" size="4" ></chord>';
                    }   


if($x3 == 'C#'){
      echo'
    <chord name="C#" positions="X43121" fingers="-43121" size="4" ></chord>';
                     }
    if($x3 == 'D'){
     echo'
  <chord name="D" positions="XX0232" fingers="---132" size="4" ></chord>';
                    }
 if($x3 == 'Db'){
               echo'
    <chord name="Db" positions="X43121" fingers="-43121" size="4" ></chord>';
                   }            
if($x3 == 'D#'){
    echo'
    <chord name="D#" positions="XX1343" fingers="--1243" size="4" ></chord>';
        }
if($x3 == 'E'){
    echo'
    <chord name="E" positions="022100" fingers="-231--" size="4" ></chord>';
            }
if($x3 == 'Eb'){
        echo'
    <chord name="Eb" positions="X65343" fingers="-43121" size="4" ></chord>';
            }   
if($x3 == 'F'){
        echo'
<chord name="F" positions="133211" fingers="134211" size="4" ></chord>';
   }
if($x3 == 'F#'){
     echo'
<chord name="F#" positions="244322" fingers="134211" size="4" ></chord>';
            }
if($x3 == 'G'){
        echo'
    <chord name="G" positions="320003" fingers="21---3" size="4" ></chord>';
            }   

if($x3 == 'G#'){
                echo'
<chord name="G#" positions="466544" fingers="134211" size="4" ></chord>';
           }
if($x3 == 'Gb'){
             echo'
<chord name="Gb" positions="244322" fingers="134211" size="4" ></chord>';
                    }
if($x3 == 'Am'){
                echo'
<chord name="Am" positions="X02210" fingers="--231-" size="4" ></chord>';
                    }   
if($x3 == 'A#m'){
                        echo'
 <chord name="A#m" positions="X13321" fingers="-13421" size="4" ></chord>';
                   }
if($x3 == 'Abm'){
                     echo'
<chord name="Abm" positions="466444" fingers="134111" size="4" ></chord>';
                            }
if($x3 == 'Bm'){
                        echo'
 <chord name="Bm" positions="X24432" fingers="-13421" size="4" ></chord>';
                            }  
 
if($x3 == 'Bbm'){
         echo'
 <chord name="Bbm" positions="X13321" fingers="-13421" size="4" ></chord>';
                                    }   
if($x3 == 'Cm'){
                                        echo'
<chord name="Cm" positions="X35543" fingers="-13421" size="4" ></chord>';
                                   }
if($x3 == 'C#m'){
                                     echo'
<chord name="C#m" positions="X46654" fingers="-13421" size="4" ></chord>';
                                            }
if($x3 == 'Dm'){
                                        echo'
  <chord name="Dm" positions="XX0231" fingers="---231" size="4" ></chord>';
                                            }  

if($x3 == 'D#m'){
                                                echo'
    <chord name="D#m" positions="XX1342" fingers="--1342" size="4" ></chord>';
                                           }
if($x3 == 'Dbm'){
                                             echo'
<chord name="Dbm" positions="X46654" fingers="-13421" size="4" ></chord>';
                                                    }
if($x3 == 'Ebm'){
                                                echo'
<chord name="Ebm" positions="XX4342" fingers="--3241" size="4" ></chord>';
                                                    }             
if($x3 == 'Em'){
                                                        echo'
<chord name="Em" positions="022000" fingers="-23---" size="4" ></chord>';
                                                   }
if($x3 == 'Fm'){
                                                     echo'
 <chord name="Fm" positions="133111" fingers="134111" size="4" ></chord>';
                                                            }
if($x3 == 'F#m'){
                                                        echo'
<chord name="F#m" positions="244222" fingers="134111" size="4" ></chord>';
                                                            }       
if($x3 == 'Gbm'){
                                                                echo'
<chord name="Gbm" positions="244222" fingers="134111" size="4" ></chord>';
                                                           }
if($x3 == 'Gm'){
                                                             echo'
<chord name="Gm" positions="355333" fingers="134111" size="4" ></chord>';
                                                                    }
if($x3 == 'G#m'){
                                                                echo'
<chord name="G#m" positions="466444" fingers="134111" size="4" ></chord>';
                                                                    }            
if($x3 == 'Cdim'){
                                                                        echo'
<chord name="Cdim" positions="X3454X" fingers="-1243-" size="4" ></chord>';
                                                                   }
if($x3 == 'C#dim'){
                                                                     echo'
<chord name="C#dim" positions="X4565X" fingers="-1243-" size="4" ></chord>';
                                                                            }
if($x3 == 'Dbdim'){
                                                                        echo'
<chord name="Dbdim" positions="X4565X" fingers="-1243-" size="4" ></chord>';
                                                                            }                
if($x3 == 'Ddim'){
                                                                                echo'
<chord name="Ddim" positions="X5676X" fingers="-1243-" size="4" ></chord>';
                                                                                    }            
if($x3 == 'D#dim'){
                                                                                        echo'
<chord name="D#dim" positions="X6787X" fingers="-1243-" size="4" ></chord>';
                                                                                   }
if($x3 == 'Ebdim'){
                                                                         echo'
<chord name="Ebdim" positions="XX1242" fingers="--1243" size="4" ></chord>';
                                                                                            }
if($x3 == 'Edim'){
                                                                          echo'
<chord name="Edim" positions="0120XX" fingers="-12---" size="4" ></chord>';
                                                                             }             
if($x3 == 'Fdim'){
                                                                            echo'
<chord name="Fdim" positions="1231XX" fingers="1231--" size="4" ></chord>';
                                                                                 }            
if($x3 == 'F#dim'){
                                                                                 echo'
<chord name="F#dim" positions="2342XX" fingers="1231--" size="4" ></chord>';
                                                                                    }
if($x3 == 'Gdim'){
                                                                                    echo'
<chord name="Gdim" positions="3453XX" fingers="1231--" size="4" ></chord>';
                                                                                        }
if($x3 == 'G#dim'){
                                                                                    echo'
<chord name="G#dim" positions="4564XX" fingers="1231--" size="4" ></chord>';
                                                                         }                                                                                              
            
if($x3 == 'Gbdim'){
                                                                         echo'
<chord name="Gbdim" positions="2342XX" fingers="1231--" size="4" ></chord>';
                                                                      }            
if($x3 == 'Adim'){
                                                                         echo'
<chord name="Adim" positions="X0121X" fingers="--132-" size="4" ></chord>';
                                                                             }
if($x3 == 'A#dim'){
                                                                            echo'
<chord name="A#dim" positions="X1232X" fingers="-1243-" size="4" ></chord>';
                                                                            }
if($x3 == 'Abdim'){
                                                    echo'
<chord name="Abdim" positions="XX6434" fingers="--4312" size="4" ></chord>';
                                                                                }            
if($x3 == 'Bdim'){
                                      echo'
<chord name="Bdim" positions="X2343X" fingers="-1243-" size="4" ></chord>';
                                                      }
if($x3 == 'Bbdim'){
                                                          echo'
<chord name="Bbdim" positions="XX8656" fingers="--4312" size="4" ></chord>';
                                                }   
//--------------------------------------------------//
   
if($x3 == 'Cb5'){
    echo'
<chord name="Cb5" positions="X3455X" fingers="-1234-" size="4" ></chord>';
}   
                                                
if($x3 == 'C#b5'){
    echo'
<chord name="C#b5" positions="X4566X" fingers="-1234-" size="4" ></chord>';
} 

if($x3 == 'Dbb5'){
    echo'
<chord name="Dbb5" positions="X4566X" fingers="-1234-" size="4" ></chord>';
} 

if($x3 == 'Db5'){
    echo'
<chord name="Db5" positions="X5677X" fingers="-1234-" size="4" ></chord>';
}   
                                                
if($x3 == 'D#b5'){
    echo'
<chord name="D#b5" positions="X6788X" fingers="-1234-" size="4" ></chord>';
} 

if($x3 == 'Ebb5'){
    echo'
<chord name="Ebb5" positions="X6788X" fingers="-1234-" size="4" ></chord>';
} 

if($x3 == 'Eb5'){
    echo'
<chord name="Eb5" positions="X7899X" fingers="-1234-" size="4" ></chord>';
}   
                                                
if($x3 == 'Fb5'){
    echo'
<chord name="Fb5" positions="1232XX" fingers="1243--" size="4" ></chord>';
} 

if($x3 == 'F#b5'){
    echo'
<chord name="F#b5" positions="2343XX" fingers="1243--" size="4" ></chord>';
} 

if($x3 == 'Gbb5'){
    echo'
<chord name="Gbb5" positions="2343XX" fingers="1243--" size="4" ></chord>';
}   
                                                
if($x3 == 'Gb5'){
    echo'
<chord name="Gb5" positions="3454XX" fingers="1243--" size="4" ></chord>';
} 

if($x3 == 'G#b5'){
    echo'
<chord name="G#b5" positions="4565XX" fingers="1243--" size="4" ></chord>';
} 

if($x3 == 'Abb5'){
    echo'
<chord name="Abb5" positions="4565XX" fingers="1243--" size="4" ></chord>
';} 
if($x3 == 'Ab5'){
    echo'
<chord name="Ab5" positions="5676XX" fingers="1243--" size="4" ></chord>
';} 
if($x3 == 'A#b5'){
    echo'
<chord name="A#b5" positions="6787XX" fingers="1243--" size="4" ></chord>
';} 
if($x3 == 'Bbb5'){
    echo'
<chord name="Bbb5" positions="6787XX" fingers="1243--" size="4" ></chord>
';} 
if($x3 == 'Bb5'){ echo'
<chord name="Bb5" positions="7898XX" fingers="1243--" size="4" ></chord>
';} 

//--------------------------------------------------//

if($x3 == 'Cm#5'){ echo'
<chord name="Cm#5" positions="X31114" fingers="-21113" size="4" ></chord>';}

if($x3 == 'C#m#5'){ echo'
<chord name="C#m#5" positions="XXX655" fingers="---211" size="4" ></chord>';}

if($x3 == 'Dbm#5'){ echo'
<chord name="Dbm#5" positions="XXX655" fingers="---211" size="4" ></chord>';}

if($x3 == 'Dm#5'){ echo'
<chord name="Dm#5" positions="X53336" fingers="-21113" size="4" ></chord>';}

if($x3 == 'D#m#5'){ echo'
<chord name="D#m#5" positions="X64447" fingers="-21113" size="4" ></chord>';}

if($x3 == 'Ebm#5'){ echo'
<chord name="Ebm#5" positions="X64447" fingers="-21113" size="4" ></chord>';}

if($x3 == 'Em#5'){ echo'
<chord name="Em#5" positions="X75558" fingers="-21113" size="4" ></chord>';}

if($x3 == 'Fm#5'){ echo'
<chord name="Fm#5" positions="X86669" fingers="-21113" size="4" ></chord>';}

if($x3 == 'F#m#5'){ echo'
<chord name="F#m#5" positions="254232" fingers="143121" size="4" ></chord>';}

if($x3 == 'Gbm#5'){ echo'
<chord name="Gbm#5" positions="254232" fingers="143121" size="4" ></chord>';}

if($x3 == 'Gm#5'){ echo'
<chord name="Gm#5" positions="3X5343" fingers="1-3121" size="4" ></chord>';}

if($x3 == 'G#m#5'){ echo'
<chord name="G#m#5" positions="4X6454" fingers="1-3121" size="4" ></chord>';}

if($x3 == 'Abm#5'){ echo'
<chord name="Abm#5" positions="4X6454" fingers="1-3121" size="4" ></chord>';}

if($x3 == 'Am#5'){ echo'
<chord name="Am#5" positions="5X7565" fingers="1-3121" size="4" ></chord>';}

if($x3 == 'A#m#5'){ echo'
<chord name="A#m#5" positions="6X8676" fingers="1-3121" size="4" ></chord>';}

if($x3 == 'Bbm#5'){ echo'
<chord name="Bbm#5" positions="6X8676" fingers="1-3121" size="4" ></chord>';}

if($x3 == 'Bm#5'){ echo'
<chord name="Bm#5" positions="7X9787" fingers="1-3121" size="4" ></chord>';}
            
//--------------------------------------------------//
if($x3 == 'C7'){ echo'
<chord name="C7" positions="X32310" fingers="-3241-" size="4" ></chord>';}
if($x3 == 'C#7'){ echo'
<chord name="C#7" positions="X4342X" fingers="-3241-" size="4" ></chord>';}
if($x3 == 'Db7'){ echo'
<chord name="Db7" positions="X4342X" fingers="-3241-" size="4" ></chord>';}
if($x3 == 'D7'){ echo'
<chord name="D7" positions="XX0212" fingers="---213" size="4" ></chord>';}
if($x3 == 'D#7'){ echo'
<chord name="D#7" positions="XX1323" fingers="--1324" size="4" ></chord>';}
if($x3 == 'Eb7'){ echo'
<chord name="Eb7" positions="XX1323" fingers="--1324" size="4" ></chord>';}
if($x3 == 'E7'){ echo'
<chord name="E7" positions="020100" fingers="-2-1--" size="4" ></chord>';}
if($x3 == 'F7'){ echo'
<chord name="F7" positions="131211" fingers="131211" size="4" ></chord>';}
if($x3 == 'F#7'){ echo'
<chord name="F#7" positions="242322" fingers="131211" size="4" ></chord>';}
if($x3 == 'Gb7'){ echo'
<chord name="Gb7" positions="242322" fingers="131211" size="4" ></chord>';}
if($x3 == 'G7'){ echo'
<chord name="G7" positions="320001" fingers="32---1" size="4" ></chord>';}
if($x3 == 'G#7'){ echo'
<chord name="G#7" positions="464544" fingers="131211" size="4" ></chord>';}
if($x3 == 'Ab7'){ echo'
<chord name="Ab7" positions="464544" fingers="131211" size="4" ></chord>';}
if($x3 == 'A7'){ echo'
<chord name="A7" positions="575655" fingers="131211" size="4" ></chord>';}
if($x3 == 'A#7'){ echo'
<chord name="A#7" positions="686766" fingers="131211" size="4" ></chord>';}
if($x3 == 'Bb7'){ echo'
<chord name="Bb7" positions="686766" fingers="131211" size="4" ></chord>';}
if($x3 == 'B7'){ echo'
<chord name="B7" positions="797877" fingers="131211" size="4" ></chord>';}
//--------------------------------------------------//
if($x3 == 'Cm7'){ echo'
<chord name="Cm7" positions="X35343" fingers="-13121" size="4" ></chord>';}
if($x3 == 'C#m7'){ echo'
<chord name="C#m7" positions="X46454" fingers="-13121" size="4" ></chord>';}
if($x3 == 'Dbm7'){ echo'
<chord name="Dbm7" positions="X46454" fingers="-13121" size="4" ></chord>';}
if($x3 == 'Dm7'){ echo'
<chord name="Dm7" positions="X57565" fingers="-13121" size="4" ></chord>';}
if($x3 == 'D#m7'){ echo'
<chord name="D#m7" positions="X68676" fingers="-13121" size="4" ></chord>';}
if($x3 == 'Ebm7'){ echo'
<chord name="Ebm7" positions="X68676" fingers="-13121" size="4" ></chord>';}
if($x3 == 'Em7'){ echo'
<chord name="Em7" positions="020000" fingers="-1----" size="4" ></chord>';}
if($x3 == 'Fm7'){ echo'
<chord name="Fm7" positions="131111" fingers="131111" size="4" ></chord>';}
if($x3 == 'F#m7'){ echo'
<chord name="F#m7" positions="242222" fingers="131111" size="4" ></chord>';}
if($x3 == 'Gbm7'){ echo'
<chord name="Gbm7" positions="242222" fingers="131111" size="4" ></chord>';}
if($x3 == 'Gm7'){ echo'
<chord name="Gm7" positions="353333" fingers="131111" size="4" ></chord>';}
if($x3 == 'G#m7'){ echo'
<chord name="G#m7" positions="464444" fingers="131111" size="4" ></chord>';}
if($x3 == 'Abm7'){ echo'
<chord name="Abm7" positions="464444" fingers="131111" size="4" ></chord>';}
if($x3 == 'Am7'){ echo'
<chord name="Am7" positions="575555" fingers="131111" size="4" ></chord>';}
if($x3 == 'A#m7'){ echo'
<chord name="A#m7" positions="686666" fingers="131111" size="4" ></chord>';}
if($x3 == 'Bbm7'){ echo'
<chord name="Bbm7" positions="686666" fingers="131111" size="4" ></chord>';}
if($x3 == 'Bm7'){ echo'
<chord name="Bm7" positions="797777" fingers="131111" size="4" ></chord>';}
//--------------------------------------------------//

if($x3 == 'Cmaj7'){ echo'
<chord name="Cmaj7" positions="X35453" fingers="-13241" size="4" ></chord>';}
if($x3 == 'C#maj7'){ echo'
<chord name="C#maj7" positions="X46564" fingers="-13241" size="4" ></chord>';}
if($x3 == 'Dbmaj7"'){ echo'
<chord name="Dbmaj7" positions="X46564" fingers="-13241" size="4" ></chord>';}
if($x3 == 'Dmaj7'){ echo'
<chord name="Dmaj7" positions="X57675" fingers="-13241" size="4" ></chord>';}
if($x3 == 'D#maj7'){ echo'
<chord name="D#maj7" positions="X68786" fingers="-13241" size="4" ></chord>';}
if($x3 == 'Ebmaj7'){ echo'
<chord name="Ebmaj7" positions="X68786" fingers="-13241" size="4" ></chord>';}
if($x3 == 'Emaj7'){ echo'
<chord name="Emaj7" positions="X79897" fingers="-13241" size="4" ></chord>';}
if($x3 == 'Fmaj7'){ echo'
<chord name="Fmaj7" positions="132211" fingers="142311" size="4" ></chord>';}
if($x3 == 'F#maj7'){ echo'
<chord name="F#maj7" positions="243322" fingers="142311" size="4" ></chord>';}
if($x3 == 'Gbmaj7'){ echo'
<chord name="Gbmaj7" positions="243322" fingers="142311" size="4" ></chord>';}
if($x3 == 'Gmaj7'){ echo'
<chord name="Gmaj7" positions="354433" fingers="142311" size="4" ></chord>';}
if($x3 == 'G#maj7'){ echo'
<chord name="G#maj7" positions="465544" fingers="142311" size="4" ></chord>';}
if($x3 == 'Abmaj7'){ echo'
<chord name="Abmaj7" positions="465544" fingers="142311" size="4" ></chord>';}
if($x3 == 'Amaj7'){ echo'
<chord name="Amaj7" positions="576655" fingers="142311" size="4" ></chord>';}
if($x3 == 'A#maj7'){ echo'
<chord name="A#maj7" positions="687766" fingers="142311" size="4" ></chord>';}
if($x3 == 'Bbmaj7'){ echo'
<chord name="Bbmaj7" positions="687766" fingers="142311" size="4" ></chord>';}
if($x3 == 'Bmaj7'){ echo'
<chord name="Bmaj7" positions="798877" fingers="142311" size="4" ></chord>';}

//--------------------------------------------------//

if($x3 == 'Cmmaj7'){ echo'
<chord name="Cmmaj7" positions="X35443" fingers="-14231" size="4" ></chord>';}
if($x3 == 'C#mmaj7'){ echo'
<chord name="C#mmaj7" positions="X46554" fingers="-14231" size="4" ></chord>';}
if($x3 == 'Dbmmaj7'){ echo'
<chord name="Dbmmaj7" positions="X46554" fingers="-14231" size="4" ></chord>';}
if($x3 == 'Dmmaj7'){ echo'
<chord name="Dmmaj7" positions="X57665" fingers="-14231" size="4" ></chord>';}
if($x3 == 'D#mmaj7'){ echo'
<chord name="D#mmaj7" positions="XX1332" fingers="--1342" size="4" ></chord>';}
if($x3 == 'Ebmmaj7'){ echo'
<chord name="Ebmmaj7" positions="XX1332" fingers="--1342" size="4" ></chord>';}
if($x3 == 'Emmaj7'){ echo'
<chord name="Emmaj7" positions="021000" fingers="-21---" size="4" ></chord>';}
if($x3 == 'Fmmaj7'){ echo'
<chord name="Fmmaj7" positions="XX3110" fingers="--412-" size="4" ></chord>';}
if($x3 == 'F#mmaj7'){ echo'
<chord name="F#mmaj7" positions="XX4221" fingers="--4231" size="4" ></chord>';}
if($x3 == 'Gbmmaj7'){ echo'
<chord name="Gbmmaj7" positions="XX4221" fingers="--4231" size="4" ></chord>';}
if($x3 == 'Gmmaj7'){ echo'
<chord name="Gmmaj7" positions="XX5332" fingers="--4231" size="4" ></chord>';}
if($x3 == 'G#mmaj7'){ echo'
<chord name="G#mmaj7" positions="XX6443" fingers="--4231" size="4" ></chord>';}
if($x3 == 'Abmmaj7'){ echo'
<chord name="Abmmaj7" positions="XX6443" fingers="--4231" size="4" ></chord>';}
if($x3 == 'Ammaj7'){ echo'
<chord name="Ammaj7" positions="X02110" fingers="--312-" size="4" ></chord>';}
if($x3 == 'A#mmaj7'){ echo'
<chord name="A#mmaj7" positions="X13221" fingers="-14231" size="4" ></chord>';}
if($x3 == 'Bbmmaj7'){ echo'
<chord name="Bbmmaj7" positions="X13221" fingers="-14231" size="4" ></chord>';}
if($x3 == 'Bmmaj7'){ echo'
<chord name="Bmmaj7" positions="X24332" fingers="-14231" size="4" ></chord>';}

//--------------------------------------------------//
if($x3 == 'C+'){ echo'
<chord name="C+" positions="X32110" fingers="-4312-" size="4" ></chord>';}
if($x3 == 'Caug'){ echo'
<chord name="Caug" positions="X32110" fingers="-4312-" size="4" ></chord>';}
if($x3 == 'C#+'){ echo'
<chord name="C#+" positions="X4322X" fingers="-3211-" size="4" ></chord>';}
if($x3 == 'C#aug'){ echo'
<chord name="C#aug" positions="X4322X" fingers="-3211-" size="4" ></chord>';}
if($x3 == 'D+'){ echo'
<chord name="D+" positions="XX0332" fingers="---231" size="4" ></chord>';}
if($x3 == 'Daug'){ echo'
<chord name="Daug" positions="XX0332" fingers="---231" size="4" ></chord>';}
if($x3 == 'D#+'){ echo'
<chord name="D#+" positions="XX5443" fingers="--4231" size="4" ></chord>';}
if($x3 == 'D#aug'){ echo'
<chord name="D#aug" positions="XX5443" fingers="--4231" size="4" ></chord>';}
if($x3 == 'E+'){ echo'
<chord name="E+" positions="032110" fingers="-4312-" size="4" ></chord>';}
if($x3 == 'Eaug'){ echo'
<chord name="Eaug" positions="032110" fingers="-4312-" size="4" ></chord>';}
if($x3 == 'F+'){ echo'
<chord name="F+" positions="XX3221" fingers="--4231" size="4" ></chord>';}
if($x3 == 'Faug'){ echo'
<chord name="Faug" positions="XX3221" fingers="--4231" size="4" ></chord>';}
if($x3 == 'F#+'){ echo'
<chord name="F#+" positions="XX4332" fingers="--4231" size="4" ></chord>';}
if($x3 == 'F#aug'){ echo'
<chord name="F#aug" positions="XX4332" fingers="--4231" size="4" ></chord>';}
if($x3 == 'G+'){ echo'
<chord name="G+" positions="321003" fingers="321--4" size="4" ></chord>';}
if($x3 == 'Gaug'){ echo'
<chord name="Gaug" positions="321003" fingers="321--4" size="4" ></chord>';}
if($x3 == 'G#+'){ echo'
<chord name="G#+" positions="XX2110" fingers="--312-" size="4" ></chord>';}
if($x3 == 'G#aug'){ echo'
<chord name="G#aug" positions="XX2110" fingers="--312-" size="4" ></chord>';}
if($x3 == 'A+'){ echo'
<chord name="A+" positions="X03221" fingers="--4231" size="4" ></chord>';}
if($x3 == 'Aaug'){ echo'
<chord name="Aaug" positions="X03221" fingers="--4231" size="4" ></chord>';}
if($x3 == 'A#+'){ echo'
<chord name="A#+" positions="XX4332" fingers="--4231" size="4" ></chord>';}
if($x3 == 'A#aug'){ echo'
<chord name="A#aug" positions="XX4332" fingers="--4231" size="4" ></chord>';}
if($x3 == 'B+'){ echo'
<chord name="B+" positions="76500X" fingers="321---" size="4" ></chord>';}
if($x3 == 'Baug'){ echo'
<chord name="Baug" positions="76500X" fingers="321---" size="4" ></chord>';}


if($x3 == 'Csus2'){ echo'
<chord name="Csus2" positions="X35533" fingers="-13411" size="4" ></chord>';}
if($x3 == 'C#sus2'){ echo'
<chord name="C#sus2" positions="X46644" fingers="-13411" size="4" ></chord>';}
if($x3 == 'Dsus2'){ echo'
<chord name="Dsus2" positions="XX0230" fingers="---12-" size="4" ></chord>';}
if($x3 == 'D#sus2'){ echo'
<chord name="D#sus2" positions="XX1341" fingers="--1341" size="4" ></chord>';}
if($x3 == 'Esus2'){ echo'
<chord name="Esus2" positions="XX2452" fingers="--1341" size="4" ></chord>';}
if($x3 == 'Fsus2'){ echo'
<chord name="Fsus2" positions="XX3563" fingers="--1341" size="4" ></chord>';}
if($x3 == 'F#sus2'){ echo'
<chord name="F#sus2" positions="XX4674" fingers="--1341" size="4" ></chord>';}
if($x3 == 'Gsus2'){ echo'
<chord name="Gsus2" positions="XX5785" fingers="--1341" size="4" ></chord>';}
if($x3 == 'G#sus2'){ echo'
<chord name="G#sus2" positions="XX6896" fingers="--1341" size="4" ></chord>';}
if($x3 == 'Asus2'){ echo'
<chord name="Asus2" positions="X02200" fingers="--23--" size="4" ></chord>';}
if($x3 == 'A#sus2'){ echo'
<chord name="A#sus2" positions="X13311" fingers="-13411" size="4" ></chord>';}
if($x3 == 'Bsus2'){ echo'
<chord name="Bsus2" positions="X24422" fingers="-13411" size="4" ></chord>';}
if($x3 == 'Csus4'){ echo'
<chord name="Csus4" positions="X35563" fingers="-12341" size="4" ></chord>';}
if($x3 == 'C#sus4'){ echo'
<chord name="C#sus4" positions="X46674" fingers="-12341" size="4" ></chord>';}
if($x3 == 'Dsus4'){ echo'
<chord name="Dsus4" positions="XX0233" fingers="---123" size="4" ></chord>';}
if($x3 == 'D#sus4'){ echo'
<chord name="D#sus4" positions="XX1344" fingers="--1344" size="4" ></chord>';}
if($x3 == 'Esus4'){ echo'
<chord name="Esus4" positions="022200" fingers="-111--" size="4" ></chord>';}
if($x3 == 'Fsus4'){ echo'
<chord name="Fsus4" positions="133311" fingers="123411" size="4" ></chord>';}
if($x3 == 'F#sus4'){ echo'
<chord name="F#sus4" positions="244422" fingers="123411" size="4" ></chord>';}
if($x3 == 'Gsus4'){ echo'
<chord name="Gsus4" positions="355533" fingers="123411" size="4" ></chord>';}
if($x3 == 'G#sus4'){ echo'
<chord name="G#sus4" positions="466644" fingers="123411" size="4" ></chord>';}
if($x3 == 'Asus4'){ echo'
<chord name="Asus4" positions="577755" fingers="123411" size="4" ></chord>';}
if($x3 == 'A#sus4'){ echo'
<chord name="A#sus4" positions="688866" fingers="123411" size="4" ></chord>';}
if($x3 == 'Bsus4'){ echo'
<chord name="Bsus4" positions="799977" fingers="123411" size="4" ></chord>';}














  

    }
}

} 



else {
    echo "No data received";
}

?>
<script>chords.replace()</script>





</body>
</html>

