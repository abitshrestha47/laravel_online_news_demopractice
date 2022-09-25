<?php
    namespace App\Models;

    class Article{
        public static function getallarticles(){
            return [
                [
                    'id'=>'1',
                    'header'=>'Dr KC ends hunger strike after 10-point agreement with government',
                    'about'=>'The sides reached an agreement on the 12th day of the public health crusader’s latest fast-unto-death protest.',
                    'detail'=>'Dr Govinda KC has ended his hunger strike following a 10-point agreement with the government on Saturday.


                    Dr KC, who has been seeking reforms in the medical education sector, began his 20th fast-unto-death protest on September 12 at the Dharmashala of Laxminarayan Temple in Dhangadi.
                    
                    According to Pritam Subedi, a member of Dr KC’s team, both sides signed the agreement before KC ended his hunger strike amid a press conference in the Tribhuvan University Teaching Hospital premises in Maharajgunj, Kathmandu.
                    
                    
                    Dr KC broke his hunger strike by drinking juice from the hands of Amanlal Chaudhary, a patient at the hospital.
                    
                    Both sides have agreed to present the signed agreement to the Cabinet for endorsement.
                    
                    KC, during the press meeting, warned of holding another round of hunger strike if the agreement was not implemented in the given timeframe.
                    
                    Earlier in the day, members of the public staged a demonstration in support of KC’s cause at Maitighar.
                    
                    KC was flown to Kathmandu on September 21 for further treatment after his health condition deteriorated. He is currently undergoing treatment at Tribhuvan University Teaching Hospital.
                    
                    The government had formed a talks team under the coordination of Ram Prasad Ghimire, secretary at the Office of the Prime Minister and Council of Ministers. Roshan Pokharel, secretary at the Ministry of Health and Population and Ram Krishna Subedi, secretary at the Ministry of Science and Technology were the other members of the government team.
                    
                    Advocate Om Prakash Aryal, Dr Lijan Maharjan and Subedi were members of Dr KC’s talks team.
                    
                    KC has been championing health reform causes since his first protest in July 2012. He has currently put forth a seven-point demand which includes but is not limited to the formulation of an umbrella act regarding health science institutions; the introduction of legal provisions for the appointment of office bearers of universities and health institutions; and to turn medical teaching institutions into non-profit institutions by 2029.'
                ],
                [
                    'id'=>'2',
                    'header'=>'Four-wheelers banned inside New Road area in view of Dashain',
                    'about'=>'The ban has come into effect from Saturday and will continue until the day of Fulpati.',
                    'detail'=>'The Kathmandu Metropolitan City and Kathmandu Valley Traffic Police Office on Saturday decided to ban the entry of four-wheelers inside the New Road area in view of the upcoming Dashain festival.


                    According to the Valley Traffic Police Office, the ban has come into effect from Saturday itself and will continue until Fulpati, the seventh day of the 10-day long festival.
                    
                    Several core areas inside Kathmandu valley, especially New Road area, witness massive footfall during the festive season with people thronging the area for shopping, throwing the traffic movement out of gear.
                    
                    
                    In a daily update on its website, the traffic police office said that all four-wheelers including private, public and cargo vehicles will be prohibited entry into the New Road area from New Road gate, Kamalakshi, Bhotahiti and Indra Chowk.
                    
                    Kathmandu Valley Traffic Police Office spokesperson Senior Superintendent Rajendra Prasad Bhatta said that the vehicles will be barred entry inside the core New Road area after 10am until the traffic volume around the area decreases in the evening.
                    
                    Bhatta further informed that parking space for vehicles during the ban period will be managed inside the Khula Manch. He, however, said that no one from the traffic police or the metropolis office will be present at the parking site to manage the vehicles.'
                ]
            ];
        }
        public static function getsinglearticle($id){
            $articles=self::getallarticles();
            foreach($articles as $value){
                if($value['id']===$id){
                    return $value;
                }
            }
            return;
        }
    }

?>