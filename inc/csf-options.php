<?php  

if(class_exists('CSF') ){


    $prefix = 'theme_options';

    //option
    CSF:: createOptions($prefix, array(
        'menu_title' => __('Theme option', 'navana'),
        'menu_slug' => 'theme_options',
    ));


        //header parent section
    CSF::createSection($prefix, array(
        'id' => 'header',
        'title' => 'Header',
        'fields' => array(
   
   
        )));
   
        CSF::createSection($prefix, array(
        'parent' => 'header',
        'title' => 'Top Header',
        'fields' => array(


            //fields 
            array(
                'id'    => 'top_email',
                'type'  => 'text',
                'title' => 'Email',
                'placeholder' => 'example@email.com'
              ),
            array(
                'id'    => 'top_address',
                'type'  => 'text',
                'title' => 'Address',
                'placeholder' => 'Mohammadpur,Dhaka, Bangladesh'
              ),
            array(
                'id'    => 'top_Phone_number',
                'type'  => 'number',
                'title' => 'Phone number',
                'placeholder' => '+880 1852 74 50 60'

              ),


        )
        ));


        //section
    CSF::createSection($prefix, array(
        'parent' => 'header',
        'title' => 'Header',
        'fields' => array(


            array(
                'id'    => 'logo_image',
                'type'  => 'upload',
                'title' => 'Select your logo',
               
              ),
         

        )
        ));


        //header section color:
        CSF:: createSection($prefix, array(
            'parent' => 'header',
            'title' => 'Header Color',
            'fields' => array(
               
                array(
                    'id' => 'header_text_color',
                    'type' => 'color',
                    'title' => 'Select Text Color',
                    
                    'output' => array(
                       
                        'color' => '',
                        
                    ),
                ),

                array(
                    'id' => 'header_bg_color',
                    'type' => 'color',
                    'title' => 'Select Background Color',
                    
                    'output' => array(
                        'background_color' => '',
                       
                    ),
                )




            )
                    ));



//footer section

CSF::createSection($prefix, array(
    'id' => 'footer',
    'title' => 'Footer',
    'fields' => array(


    )));
     

    CSF::createSection($prefix, array(
        'parent' => 'footer',
        'title' => 'Footer top',
        'fields' => array(

            array(
            'id'    => 'footer_logo',
            'type'  => 'upload',
            'title' => 'Upload your logo',
            ),

            array(
            'id'    => 'footer_text',
            'type'  => 'textarea',
            'title' => 'Footer Text',
            ),  

            array(
                'id' => 'footer_copyright_text',
                'type' => 'text',
                'title' => 'copyright text'
            ),
          
            array(
                'id' => 'footer_social_icon',
                'type' => 'repeater',
                'title' => 'Socail media icon',
                'fields' => array(


                array(
                    'id' => 'socials_icon',
                    'type' => 'icon',
                    'title' => 'select icon'
                ),
                array(
                    'id' => 'socials_link',
                    'type' => 'link',
                    'title' => 'social links'
                )




                )
            )


        )));


    CSF::createSection($prefix, array(
        'id' => 'banner',
        'title' => 'Banner Section',
        'fields' => array(
        )));

            CSF::createSection($prefix, array(
                'parent' => 'banner',
                'title' => 'Banner section',
                'fields' => array(

                array(
                    'id' => 'banner_bg_img',
                    'title' => 'Banner Background Image',
                    'type' => 'background',
                    'background_color' => false,
                    'background_size' => false,
                    'background_position' => false,
                    'background_repeat' => false,
                    'background_attachment' => false,
                    'output' => '.banner'
                ),

                array(
                    'id' => 'banner_sub_top_txt',
                    'type' => 'text',
                    'title' => 'Sub Text Top'
                ),

                array(
                    'id' => 'baner_main_text',
                    'type' => 'text',
                    'title' => 'Banner Main Text'
                ),
                array(
                    'id' => 'banner_sub_text',
                    'type' => 'textarea',
                    'title' => 'Banner Sub Text'
                ),
                array(
                    'id' => 'banner_btn_txt',
                    'type' => 'text',
                    'title' => 'banner button text'
                ),
                array(
                    'id' => 'banner_btn_link',
                    'type' => 'link',
                    'title' => 'Banner Button Link'
                )


        )));


        
        CSF::createSection($prefix, array(
            'id' => 'appointment',
            'title' => 'Appointment section'
        ));

        CSF::createSection($prefix, array(
            'parent' => 'appointment',
            'title' => 'appointment',
            'fields' => array(
                array(
                    'id' => 'online_appointment_icon',
                    'type' => 'icon',
                    'title' => 'appointment icon',

                ),
                array(
                    'id' => 'online_appointment_subtitle',
                    'type' => 'text',
                    'title' => 'appointment title',

                ),

                array(
                    'id' => 'online_appointment_title',
                    'type' => 'text',
                    'title' => 'appointment Description',
                    
                ),
                array(
                    'id' => 'online_appointment_description',
                    'type' => 'textarea',
                    'title' => 'appointment Description',
                    
                ),

                array(
                    'id' => 'online_appointment_btn_txt',
                    'type' => 'text',
                    'title' => 'appointment Button text',
                   ),
                array(
                    'id' => 'online_appointment_btn_link',
                    'type' => 'link',
                    'title' => 'appointment Button link',
                     ),

            ) 
                ));


        CSF::createSection($prefix, array(
            'parent' => 'appointment',
            'title' => 'timing and schedule',
            'fields' => array(
                array(
                    'id' => 'appointment_time_scdl_icon',
                    'type' => 'icon',
                    'title' => 'Schedule icon',

                ),
                array(
                    'id' => 'appointment_time_subtitle',
                    'type' => 'text',
                    'title' => 'appointment time title',

                ),

                array(
                    'id' => 'appointment_time_title',
                    'type' => 'text',
                    'title' => 'appointment time Title',
                    
                ),
                array(
                    'id' => 'online_appointment_time',
                    'type' => 'repeater',
                    'title' => 'appointment Date and time',
                    'fields' => array(

                        array(
                            'id' => 'appointment_day',
                            'type' => 'text',
                            'title' => 'appointment date',
                            'subtitle' => 'Ex. Sun to Sat'
                        ),
                        array(
                             'id' => 'appointment_time',
                             'type' => 'text',
                             'title' => 'appointment time',
                             'subtitle' => 'ex. 12:00pm to 04:00 am'
                        ) )    
                        ),
                        )   
                        ));


        CSF::createSection($prefix, array(
            'parent' => 'appointment',
            'title' => 'Emetgency call',
            'fields' => array(
                array(
                    'id' => 'emergency_call_icon',
                    'title' => 'Emergency Call Icon',
                    'type' => 'icon'
                ),
                array(
                    'id' => 'emergency_call_sub_title',
                    'title' => 'emergency_call_sub_title',
                    'type' => 'text',

                ),
                array(
                    'id' => 'emergency_call_title',
                    'title' => 'Emergency Call Title',
                    'type' => 'text',

                ),
                array(
                    'id' => 'emergency_call_description',
                    'title' => 'Emergency Call Description',
                    'type' => 'textarea',

                ),


            ),
        )) ;

        //personal health care and living section. 

        CSF::createSection($prefix, array(
            
            'title' => 'personal health care and living section',
            'fields' =>  array(

               

                        array(
                            'id' => 'personal_health_img_one',
                            'type' => 'upload',
                            'title' => 'upload images'
                            
                        ),
                        array(
                            'id' => 'personal_health_img_two',
                            'type' => 'upload',
                            'title' => 'upload second images'
                        ),
                        array(
                            'id' => 'personal_health_img_three',
                            'type' => 'upload',
                            'title' => 'upload third images'
                        ),
               
                array(
                    'id' => 'personal_health_title', 
                    'type' => 'text',
                    'title' => 'Personal Health Title',
                    
                ),
                array(
                    'id' => 'personal_health_description', 
                    'type' => 'textarea',
                    'title' => 'Personal Health Description',
                    
                ),
                array(
                    'id' => 'phd_btn_txt',
                    'type' => 'text',
                    'title' => 'banner button text'
                ),
                array(
                    'id' => 'phd_btn_link',
                    'type' => 'link',
                    'title' => 'Banner Button Link'
                )


                ),

                ));


    // counter section

    CSF::createSection($prefix, array(
        'id' => ' couunter_section',
        'title' => 'Counter Section',
        'fields' => array(

            array(
                'id' => 'counter_repeater',
                'type' => 'repeater',
                'fields' => array(
                    array(
                        'id' => 'count_item', 
                        'type' => 'text',
                        'title' => 'Count Item name',
                        'subtitle' => 'happy people'
    
                    ),
                    array(
                        'id' => 'count_item_number',
                        'title' => 'count item number',
                        'subtitle' => '444',
                        'type' => 'number'
                    )
                )
            )

            
              

                )
            ),
                
            );
                
//Award winning care

    CSF::createSection($prefix, array(
        'id' => 'award_winngin_care_section',
        'title' => 'award winning_section',
        'fields' => array(
            array(
                'id' => 'awc_title',
                'title' => 'Title',
                'type' => 'text',
            ),
            array(
                'id' => 'awc_description',
                'title' => 'Description', 
                'type' => 'textarea'
            ),
            
            array(
                'id' => 'awc_items',
                'title' => 'Section Items',
                'type' => 'repeater',
                'fields' => array(
                    array( 
                        'id' => 'awc_icon',
                        'title' => 'Select Icons',
                        'type' => 'icon' 
                    ),
                    array(
                        'id' => 'awc_title',
                        'type' => 'text',
                        'title' => 'Title'

                    ),
                    array(
                        'id' => 'awc_description',
                        'type' => 'textarea',
                        'title' => 'Description'
                    )
                ) 
            )


            ),
        ));


// services section

    CSF::createSection($prefix, array(
        'id' => 'service_section',
        'title' => 'service section',
        'fields' => array(
            array(
                'id' => 'service_title_section',
                'title' => 'Title',
                'type' => 'text',
            ),
            array(
                'id' => 'service_description_section',
                'title' => 'Description', 
                'type' => 'textarea'
            ),
            
            array(
                'id' => 'services_items',
                'title' => 'Section Items',
                'type' => 'repeater',
                'fields' => array(
                    array( 
                        'id' => 'service_icon',
                        'title' => 'Select Icons',
                        'type' => 'icon' 
                    ),
                    array(
                        'id' => 'service_title',
                        'type' => 'text',
                        'title' => 'Title'

                    ),
                    array(
                        'id' => 'service_description',
                        'type' => 'textarea',
                        'title' => 'Description'
                    )
                ) 
            )


            ),
        ));


// book appointment

        CSF::createSection($prefix, array(
         
                'id' => 'book_appointment_section',
                'title' => 'Book Appointment',
                'fields' => array(

                    array(
                        'id' => 'appointment_title',
                        'title' => 'appointment title',
                        'type' => 'text',
                        
                    ),

                    array(
                        'id' => 'appointment_description',
                        'title' => 'appointment description',
                        'type' => 'textarea',
                        
                    ),


                    array(
                        'id' => 'appointment_phone_number',
                        'title' => 'Appointment Phone number',
                        'type' => 'number',

                    ),
                    array(
                        'id' => 'appointment_background_image',
                        'title' => 'background image',
                        'type' => 'upload',

                    ),
                    
                )
           
            ));


    // REVIEW SECTION

        CSF::createSection($prefix, array(
            'id' => 'review_section',
            'title' => 'Review section',
            'fields' => array(

                array(
                    'id' => 'review_section_title',
                    'title' => 'Reiview Section Title',
                    'type' => 'text' 
                ),

                array(
                    'id' => 'review_section_desc',
                    'title' => 'Reiview Section description',
                    'type' => 'textarea'

                ),
                array(
                    'id' => 'reivewss',
                    'type' => 'repeater',
                    'fields' =>array(

                        array(
                            'id' => 'review_img',
                            'type' => 'upload',
                            'title' => 'user Image',
                           
                        ),

                        array(
                            'id' => 'review_title',
                            'type' => 'text',
                            'title' => 'main comment'
                        ),

                        array(
                            'id' => 'review_title_username',
                            'type' => 'text',
                            'title' => 'user Name'
                        ),
                        array(
                            'id' => 'review_desc',
                            'type' => 'textarea',
                            'title' => 'review details'
                        )
                        ),
                    ),

                ),
            ));

//partenrs section

    CSF::createSection($prefix, array(
        'title' => 'Partners section',
        'fields' => array(

            array(
                'id' => 'partner_title_text',
                'type' => 'text',
                'title' => 'Title'
            ),
            array(
                'id' => 'partner_description',
                'type' => 'textarea',
                'title' => 'Description'
            ),

            array(
            'id' => 'parners_section',
            'type' => 'repeater',
            'fields' => array(

                array(

                    'id' => 'partners_logo',
                    'type' => 'upload',
                    'title' => 'Partners Logo',
                    

                ),)
                
            )
        )
                ));








}