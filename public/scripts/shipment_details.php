<?php
    require_once dirname(dirname(__FILE__)).'/public/header.php';
        
    function Shipment_details($psub){
        
        $sql = 'CALL  get_shipment_details(:psub)';
        
        // Build the parameters array
        $params = array (':psub' => $psub);

        // Execute the query and return the results
        $result = DatabaseHandler::GetOne($sql, $params);
        
        switch($result){
            case 1 : {
                print '<table style="color: black;">
                        <tr>
                            <th >
                                <span class="fl" style=" width: auto;border-top: 1px dotted grey; position: relative; padding-right: 5px; text-align: left;">
                                    Items :
                                </span> 
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <label>Item Description :</label>
                            </td>
                            <td >
                                <input style="width: 200px;" class="input" type="text" name="item_descr"  />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Packaging :</label>
                            </td>
                            <td >
                                <select name="SPACKNM">
                                    <option value="1">Pallets - standard (1.16m x 1.16m)</option>
                                    <option value="2">Pallets - non standard</option>
                                    <option value="3">Boxes</option>
                                    <option value="4">Carton</option>
                                    <option value="5">Crates</option>
                                    <option value="6">Drums</option>
                                    <option value="7">Flat Packs</option>
                                    <option value="8">Other</option>
                                    <option value="9">Unpackaged or N/A</option>
                                </select> 
                            </td>                
                        </tr>
                        <tr style=" width: auto; border-bottom: 1px dotted grey; position: relative; padding-right: 5px;">
                            <td>
                                <label>Qty :</label>
                            </td>
                            <td >
                                <input style="width: 200px;" class="input" type="text" name="qtyforpack"  />
                            </td>              
                        </tr>  
                    </table>
                    <table style="color: black;">
                        <tr>
                            <td>
                                <input type="checkbox" name="unk_dims" value="yes"/>
                                <label>Unsure of exact item weight &amp; dimension</label>
                            </td>                
                        </tr>                    
                        <tr>
                            <td>
                                <label>Item Height (m,cm) :</label>
                            </td>
                            <td >
                                <input style="width: 200px;" class="input" type="text" name="height"  />
                            </td>              
                        </tr>        
                        <tr>
                            <td>
                                <label>Item Width (m,cm) :</label>
                            </td>
                            <td >
                                <input style="width: 200px;" class="input" type="text" name="width"  />
                            </td>              
                        </tr>        
                        <tr>
                            <td>
                                <label>Item Length (m,cm) :</label>
                            </td>
                            <td >
                                <input style="width: 200px;" class="input" type="text" name="length"  />
                            </td>              
                        </tr>        
                        <tr>
                            <td>
                                <label>Weight per unit (kg) :</label>
                            </td>
                            <td >
                                <input style="width: 200px;" class="input" type="text" name="weight"  />
                            </td>              
                        </tr>            
                    </table>';
                break;
            }
            case 2 : {
                print '<table style="color: black;">
                        <tr>
                            <th >
                                <span class="fl" style=" width: auto;border-top: 1px dotted grey; position: relative; padding-right: 5px; text-align: left;">
                                    Vehicle(s) :
                                </span> 
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <label>Make :</label>
                            </td>
                            <td >
                                <input style="width: 200px;" class="input" type="text" name="make"  />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Model :</label>
                            </td>
                            <td >
                                <input style="width: 200px;" class="input" type="text" name="model"  />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Year :</label>
                            </td>
                            <td >
                                <input style="width: 200px;" class="input" type="text" name="year"  />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Drivable :</label>
                            </td>
                            <td >
                                <select name="DRIVABLE">
                                    <option value="1">Yes</option>
                                    <option value="2">Non</option>
                                </select> 
                            </td>
                        </tr>
                                   
                    </table>';
                    break;
            }
            case 3 : {
                print '<table style="color: black;">
                        <tr>
                            <th >
                                <span class="fl" style=" width: auto;border-top: 1px dotted grey; position: relative; padding-right: 5px; text-align: left;">
                                    Vehicle(s) :
                                </span> 
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <label>Description :</label>
                            </td>
                            <td >
                                <input style="width: 200px;" class="input" type="text" name="descr"  />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Height (m,cm) :</label>
                            </td>
                            <td >
                                <input style="width: 200px;" class="input" type="text" name="height_3"  />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Width (m,cm) :</label>
                            </td>
                            <td >
                                <input style="width: 200px;" class="input" type="text" name="width_3"  />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Length (m,cm) :</label>
                            </td>
                            <td >
                                <input style="width: 200px;" class="input" type="text" name="length_3"  /> 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Weight (kg) :</label>
                            </td>
                            <td >
                                <input style="width: 200px;" class="input" type="text" name="weight_3"  /> 
                            </td>
                        </tr>                                   
                    </table>';
                    break;
            }
            case 4 : {
                print '<table style="color: black;">
                        <tr>
                            <th >
                                <span class="fl" style=" width: auto;border-top: 1px dotted grey; position: relative; padding-right: 5px; text-align: left;">
                                    Motorcycle(s) :
                                </span> 
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <label>Make :</label>
                            </td>
                            <td >
                                <input style="width: 200px;" class="input" type="text" name="make_4"  />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Model :</label>
                            </td>
                            <td >
                                <input style="width: 200px;" class="input" type="text" name="model_4"  />
                            </td>
                        </tr>    
                    </table>';
                    break;
            }
            case 5 : {
                print '<table style="color: black;">
                        <tr>
                            <td>
                                <label>Describe what you need moved :</label>
                            </td>
                            <td >
                                <input style="width: 200px;" class="input" type="textarea" name="descr_5"  />
                            </td>
                        </tr>
                    </table>
                    <table style="color: black;">
                        <tr>
                            <td>
                                <input type="checkbox" name="unk_dims_5" value="yes"/>
                                <label>Unsure of exact item weight &amp; dimension</label>
                            </td>                
                        </tr>                    
                        <tr>
                            <td>
                                <label>Item Height (m,cm) :</label>
                            </td>
                            <td >
                                <input style="width: 200px;" class="input" type="text" name="height_5"  />
                            </td>              
                        </tr>        
                        <tr>
                            <td>
                                <label>Item Width (m,cm) :</label>
                            </td>
                            <td >
                                <input style="width: 200px;" class="input" type="text" name="width_5"  />
                            </td>              
                        </tr>        
                        <tr>
                            <td>
                                <label>Item Length (m,cm) :</label>
                            </td>
                            <td >
                                <input style="width: 200px;" class="input" type="text" name="length_5"  />
                            </td>              
                        </tr>        
                        <tr>
                            <td>
                                <label>Weight per unit (kg) :</label>
                            </td>
                            <td >
                                <input style="width: 200px;" class="input" type="text" name="weight_5"  />
                            </td>              
                        </tr>            
                    </table>';
                    break;
            }
            case 6 : {
                print '<table style="color: black;">
                        <tr>
                            <td>
                                <label>Describe what you need moved :</label>
                            </td>
                            <td >
                                <input style="width: 200px;" class="input" type="textarea" name="descr_6"  />
                            </td>
                        </tr>
                    </table>';
                    break;
            }
            case 7 : {
                print '<table style="color: black;">
                        <tr>
                            <td>
                                <label>Please provide a list of items to be moved :</label>
                            </td>
                            <td >
                                <input style="width: 200px;" class="input" type="textarea" name="descr_7"  />
                            </td>
                        </tr>
                    </table>';
                    break;
           }
            case 8 : {
                print '<table style="color: black;">
                        <tr>
                            <td>
                                <label>Describe what you need moved :</label>
                            </td>
                            <td >
                                <input style="width: 200px;" class="input" type="textarea" name="descr_8"  />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Number of Mares :</label>
                            </td>
                            <td >
                                <select name="nMARES">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select> 
                            </td>                
                        </tr>
                        <tr>
                            <td>
                                <label>Number of Mares with Foal :</label>
                            </td>
                            <td >
                                <select name="nMARESfoal">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select> 
                            </td>                
                        </tr>                    
                        <tr>
                            <td>
                                <label>Number of Geldings :</label>
                            </td>
                            <td >
                                <select name="nGELDINGS">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select> 
                            </td>                
                        </tr>                    
                        <tr>
                            <td>
                                <label>Number of Stallions :</label>
                            </td>
                            <td >
                                <select name="nStalions">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select> 
                            </td>                
                        </tr>                    
                        <tr>
                            <td>
                                <label>Breed :</label>
                            </td>
                            <td >
                                <input style="width: 200px;" class="input" type="text" name="breed"  />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Travel Experience :</label>
                            </td>
                            <td >
                                <input style="width: 200px;" class="input" type="text" name="exp"  />
                                <span style="font-size: 9px;">
                                +(i) Difficult to Load, Fload Weel, Float Poorly, Young and unused to travel, etc
                                </span>
                            </td>
                        </tr>
                </table>';
                    break;
            }
            case 9 : {
                print '<table style="color: black;">
                        <tr>
                            <td>
                                <label>Describe what you need moved :</label>
                            </td>
                            <td >
                                <input style="width: 200px;" class="input" type="textarea" name="descr_9"  />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Number of livestock :</label>
                            </td>
                            <td >
                                <input style="width: 200px;" class="input" type="text" name="livestock_no"  />
                            </td>
                        </tr>
                    </table>';
                    break;
            }
            case 10 : {
                print '<table style="color: black;">
                        <tr>
                            <th >
                                <span class="fl" style=" width: auto;border-top: 1px dotted grey; position: relative; padding-right: 5px; text-align: left;">
                                    Items :
                                </span> 
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <label>Item Description :</label>
                            </td>
                            <td >
                                <input style="width: 200px;" class="input" type="text" name="item_descr"  />
                            </td>
                        </tr>
                        <tr style=" width: auto; border-bottom: 1px dotted grey; position: relative; padding-right: 5px;">
                            <td>
                                <label>Qty :</label>
                            </td>
                            <td >
                                <input style="width: 200px;" class="input" type="text" name="qty_10"  />
                            </td>              
                        </tr>  
                    </table>
                    <table style="color: black;">
                        <tr>
                            <td>
                                <input type="checkbox" name="unk_dims_10" value="yes"/>
                                <label>Unsure of exact item weight &amp; dimension</label>
                            </td>                
                        </tr>                    
                        <tr>
                            <td>
                                <label>Item Height (m,cm) :</label>
                            </td>
                            <td >
                                <input style="width: 200px;" class="input" type="text" name="height_10"  />
                            </td>              
                        </tr>        
                        <tr>
                            <td>
                                <label>Item Width (m,cm) :</label>
                            </td>
                            <td >
                                <input style="width: 200px;" class="input" type="text" name="width_10"  />
                            </td>              
                        </tr>        
                        <tr>
                            <td>
                                <label>Item Length (m,cm) :</label>
                            </td>
                            <td >
                                <input style="width: 200px;" class="input" type="text" name="length_10"  />
                            </td>              
                        </tr>        
                        <tr>
                            <td>
                                <label>Weight per unit (kg) :</label>
                            </td>
                            <td >
                                <input style="width: 200px;" class="input" type="text" name="weight_10"  />
                            </td>              
                        </tr>            
                    </table>';
                    break;
            }            
        }
    }
?>