<?php foreach ($mainCat as $key ): ?>
                                <tr>
                                    <?php  
                                     
                                        foreach ($select_cat as $key1):

                                           if ($key['id'] == $key1) { ?>
                                            <td><input class="form-check-input" type="checkbox" value="<?php echo $key['cat_id']; ?>" name="main_category" checked></td>
                                            <td><label><?php echo $key['cat_name']; ?></label></td> 
                                            
                                            <?php 
                                             
                                          
                                            break;
                                             return $a= true;
                                           
                                        }
                                            else{ 
                                                
                                             }?>
                                          
                                          <?php
                                        endforeach;
                                        if ($a != true) { ?>
                                            <td><input class="form-check-input" type="checkbox" value="<?php echo $key['cat_id']; ?>" name="main_category"></td>
                                            <td><label><?php echo $key['cat_name']; ?></label></td>
                                            <?php
                                        }
                                    ?>

                                        
                                </tr>
                           
                            <?php endforeach; ?>