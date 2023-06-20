<?php
$data = []; // Array to store the incremented values

// Iterate through the POST data
foreach ($_POST as $key => $value) {
         if(strpos($value, '.')){
            $data[$key] = str_replace('.', ',', $value);
         }else{
            $data[$key] = $value;
         }
}
 $fname = 'data.csv'; //NAME OF THE FILE

 //Only when the file doesnt exist
 if(!file_exists($fname)){
    $fcon = fopen($fname,'a');
    $header = ['Nome do Profissional', 'Nº Processo' , 'Nome' ,
     'Data de Nascimento', 'Género' , 'Diagnóstico', 'Diagnóstico do AVC',
      'Insuficiência', 'Data do Primeiro AVC',

      'MAS - Ombro Esquerdo', 'MAS - Ombro Direito',
      'MAS - Cotovelo Esquerdo', 'MAS - Cotovelo Direito', 'MAS - Punho/Dedos Esquerdo',
      'MAS - Punho/Dedos Direito', 'MAS - Proximal', 'MAS - Distal',
      'MAS UL - Total' , 'MAS - Anca esquerdo', 'MAS - Anca direito', 'MAS - Joelho esquerdo', 'MAS - Joelho direito',
      'MAS - Tibio-Társica/Pé esquerdo', 'MAS - Tibio-Társica/Pé direito', 'MAS_LL - Proximal', 'MAS_LL - Distal', 'MAS LL - Total',

      'FM - Ombro Esquerdo', 'FM - Ombro Direito','FM - Cotovelo Esquerdo', 'FM - Cotovelo Direito', 'FM - Punho/Dedos Esquerdo',
      'FM - Punho/Dedos Direito','FM - Anca Esquerdo', 'FM - Anca Direito', 'FM - Joelho esquerdo', 'FM - Joelho direito',
      'FM - Tibio-Társica/Pé esquerdo', 'FM - Tibio-Társica/Pé direito',
   
      'EVA - Ombro Esquerdo', 'EVA - Ombro Direito','EVA - Cotovelo Esquerdo', 'EVA - Cotovelo Direito', 'EVA - Punho/Dedos Esquerdo',
      'EVA - Punho/Dedos Direito','EVA - Anca esquerdo', 'EVA - Anca direito', 'EVA - Joelho esquerdo', 'EVA - Joelho direito',
      'EVA - Tibio-Társica/Pé esquerdo', 'EVA - Tibio-Társica/Pé direito',

      'Tempo (s)', 'Nº de passos', 'Velocidade', 'Cadência (passos p/ minuto)', 'Tamanho da passada', 'Reações associadas (ARRS)',
      'FAC', 'Escala de frequência de espasmos', 'Vídeo',

      'Amp. art. passiva - Ombro Esquerdo','Amp. art. ativa - Ombro Esquerdo', 'Amp. art. passiva - Ombro Direito', 'Amp. art. ativa - Ombro Direito',
      'Amp. art. passiva - Cotovelo Esquerdo', 'Amp. art. ativa - Cotovelo Esquerdo', 'Amp. art. passiva - Cotovelo Direito', 'Amp. art. ativa - Cotovelo Direito',
      'Amp. art. passiva - Punho/Dedos Esquerdo', 'Amp. art. ativa - Punho/Dedos Esquerdo','Amp. art. passiva - Punho/Dedos Direito', 'Amp. art. ativa - Punho/Dedos Direito',
      'Amp. art. passiva - Anca Esquerdo', 'Amp. art. ativa - Anca Esquerdo', 'Amp. art. passiva - Anca Direito', 'Amp. art. ativa - Anca Direito', 
      'Amp. art. passiva - Joelho Esquerdo', 'Amp. art. ativa - Joelho Esquerdo', 'Amp. art. passiva - Joelho Direito', 'Amp. art. ativa - Joelho Direito',
      'Amp. art. passiva - Tibio-Társica/Pé Esquerdo', 'Amp. art. ativa - Tibio-Társica/Pé Esquerdo', 'Amp. art. passiva - Tibio-Társica/Pé Direito', 'Amp. art. ativa - Tibio-Társica/Pé Direito',
      'Toxina Botulínica - Tipo', 'Dosagem', 'Área de tratamento', 'Palpagem', 'Neuroestimulação', 'EMG', 'ECO',
      'Fisioterapia', 'Terapia Ocupacional', 'Ortótese', 'TENS', 'Medicação sistêmica', 'Outros', 'Intercorrências',


      'Dose - Adutor do polegar - Direito','Dose - Adutor do polegar - Esquerdo', 'Dose - Bíceps braquial - Direito','Dose - Bíceps braquial - Esquerdo',
      'Dose - Braquirradial - Direito','Dose - Braquirradial - Esquerdo', 'Dose - Braquial - Direito','Dose - Braquial - Esquerdo',
      'Dose - Coracobraquial - Direito','Dose - Coracobraquial - Esquerdo', 'Dose - Deltoides - Direito','Dose - Deltoides - Esquerdo',
      'Dose - Elevador da escápula - Direito','Dose - Elevador da escápula - Esquerdo', 'Dose - Extensor do carpo - Direito','Dose - Extensor do carpo - Esquerdo',
      'Dose - Extensor dos dedos - Direito','Dose - Extensor dos dedos - Esquerdo', 'Dose - Flexor curto do polegar - Direito','Dose - Flexor curto do polegar - Esquerdo',
      'Dose - Flexor longo do polegar - Direito','Dose - Flexor longo do polegar - Esquerdo', 'Dose - Flexor longo dos dedos - Direito','Dose - Flexor longo dos dedos - Esquerdo',
      'Dose - Flexor radial do carpo - Direito','Dose - Flexor radial do carpo - Esquerdo', 'Dose - Flexor superficial dos dedos - Direito','Dose - Flexor superficial dos dedos - Esquerdo',
      'Dose - Infraspinhoso - Direito','Dose - Infraspinhoso - Esquerdo', 'Dose - Interósseos dorsais - Direito','Dose - Interósseos dorsais - Esquerdo',
      'Dose - Latíssimo do dorso - Direito','Dose - Latíssimo do dorso - Esquerdo', 'Dose - Lombricoides - Direito','Dose - Lombricoides - Esquerdo',
      'Dose - Oponente do polegar - Direito','Dose - Oponente do polegar - Esquerdo', 'Dose - Peitoral maior - Direito','Dose - Peitoral maior - Esquerdo',
      'Dose - Pronador quadrado - Direito','Dose - Pronador quadrado - Esquerdo', 'Dose - Pronador teres - Direito','Dose - Pronador teres - Esquerdo',
      'Dose - Romboides - Direito','Dose - Romboides - Esquerdo', 'Dose - Subescapular - Direito','Dose - Subescapular - Esquerdo',
      'Dose - Supinador - Direito','Dose - Supinador - Esquerdo', 'Dose - Supraespinhoso - Direito','Dose - Supraespinhoso - Esquerdo',
      'Dose - Teres maior - Direito','Dose - Teres maior - Esquerdo', 'Dose - Trapézio - Direito','Dose - Trapézio - Esquerdo',
      'Dose - Tríceps braquial - Direito','Dose - Tríceps braquial - Esquerdo',
      'Dose - UL Total - Direito','Dose - UL Total - Esquerdo',

      'Dose - Adutor Magnum - Direito','Dose - Adutor Magnum - Esquerdo', 'Dose - Adutor Longo - Direito','Dose - Adutor Longo - Esquerdo',
      'Dose - Adutor Breve - Direito','Dose - Adutor Breve - Esquerdo', 'Dose - Bíceps crural - Direito','Dose - Bíceps crural - Esquerdo',
      'Dose - Extensor curto dos dedos - Direito','Dose - Extensor curto dos dedos - Esquerdo', 'Dose - Extensor longo do hálux - Direito','Dose - Extensor longo do hálux - Esquerdo',
      'Dose - Extensor longo dos dedos - Direito','Dose - Extensor longo dos dedos - Esquerdo', 'Dose - Fibular curto - Direito','Dose - Fibular curto - Esquerdo',
      'Dose - Fibular longo - Direito','Dose - Fibular longo - Esquerdo', 'Dose - Flexor curto do hálux - Direito','Dose - Flexor curto do hálux - Esquerdo',
      'Dose - Flexor curto dos dedos - Direito','Dose - Flexor curto dos dedos - Esquerdo', 'Dose - Flexor longo do hálux - Direito','Dose - Flexor longo do hálux - Esquerdo',
      'Dose - Flexor longo dos dedos LL - Direito','Dose - Flexor longo dos dedos LL - Esquerdo', 'Dose - Gastrocnêmio lateral - Direito','Dose - Gastrocnêmio lateral - Esquerdo',
      'Dose - Gastrocnêmio medial - Direito','Dose - Gastrocnêmio medial - Esquerdo', 'Dose - Psoas ilíaco - Direito','Dose - Psoas ilíaco - Esquerdo',
      'Dose - Reto femoral - Direito','Dose - Reto femoral - Esquerdo', 'Dose - Semimembranoso - Direito','Dose - Semimembranoso - Esquerdo',
      'Dose - Semitendinoso - Direito','Dose - Semitendinoso - Esquerdo', 'Dose - Sóleo - Direito','Dose - Sóleo - Esquerdo',
      'Dose - Tibial anterior - Direito','Dose - Tibial anterior - Esquerdo', 'Dose - Tibial posterior - Direito','Dose - Tibial posterior - Esquerdo',
      'Dose - Vasto interno - Direito','Dose - Vasto interno - Esquerdo', 'Dose - Vasto lateral - Direito','Dose - Vasto lateral - Esquerdo',
      'Dose - LL Total - Direito','Dose - LL Total - Esquerdo',

      'Dose - Cara - Direito','Dose - Cara - Esquerdo', 'Dose - Outros - Direito','Dose - Outros - Esquerdo',


      'Obj. Prim. - Cat. Princ.', 'Obj. Prim. - Subcat.', 'Obj. Prim. - Membros', 'Obj. Prim. - Baseline', 'Obj. Prim. - Outcome',
      'Obj. Sec. - Cat. Sec.', 'Obj. Sec. - Subcat.', 'Obj. Sec. - Membros', 'Obj. Sec. - Baseline', 'Obj. Sec. - Outcome',   

      'Gas T - Baseline', 'Gas T - Achieved', 'Gas T - Change',

      'Comentários/Observações'
   ];
    fputcsv($fcon, $header, ';');
    fclose($fcon);
 }

 //Adds the data
 $fcon = fopen($fname,'a');
 fputcsv($fcon, $data, ';');
 fclose($fcon);

##Prints the page of success
echo file_get_contents("success.html");
 ?>