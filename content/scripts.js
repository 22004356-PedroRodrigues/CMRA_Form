
$(document).ready(function () {

  document.getElementById('aplicationDate').valueAsDate = new Date();


  $('select[name="proximal_ul_mas"], select[name="distal_ul_mas"]').change(function () {
    var sum = parseFloat($('#MASULtotal_mas').val());
    var proximalValue = $('select[name="proximal_ul_mas"]').val();
    var distalValue = $('select[name="distal_ul_mas"]').val();
    // Check if the selected value is a number
    if (proximalValue != "" && distalValue != "" && proximalValue != null && distalValue != null && !isNaN(proximalValue) && !isNaN(distalValue)) {
      sum = parseFloat(proximalValue) + parseFloat(distalValue); // Add the selected value to the sum variable
      $('#MASULtotal_mas').val(sum);
      console.log('Updated MASULtotal_mas:', sum); // Print the updated sum in the console (optional)
    }
    else {
      $('#MASULtotal_mas').val(0);
    }
  });

  $('select[name="proximal_ll_mas"], select[name="distal_ll_mas"]').change(function () {
    var sum = parseFloat($('#MASLLtotal_mas').val());
    var proximalValue = $('select[name="proximal_ll_mas"]').val();
    var distalValue = $('select[name="distal_ll_mas"]').val();
    // Check if the selected value is a number
    if (proximalValue != "" && distalValue != "" && proximalValue != null && distalValue != null && !isNaN(proximalValue) && !isNaN(distalValue)) {
      sum = parseFloat(proximalValue) + parseFloat(distalValue); // Add the selected value to the sum variable
      $('#MASLLtotal_mas').val(sum);
      console.log('Updated MASLLtotal_mas:', sum); // Print the updated sum in the console (optional)
    }
    else {
      $('#MASLLtotal_mas').val(0);
    }
  });

  $('input[name="tempo"]').change(function () {
    var value = $(this).val();
    // Check if the selected value is a number
    if (value != "" && value != null && !isNaN(value)) {
      sum = 10 / parseInt(value); // Add the selected value to the sum variable
      $('#velocidade').val(sum);
      console.log('Updated velocidade:', sum); // Print the updated sum in the console (optional)
    }
    else {
      $('#velocidade').val(0);
    }
  });

  $('input[name="tempo"], input[name="passos"]').change(function () {
    var valueTempo = $('input[name="tempo"]').val();
    var valuePassos = $('input[name="passos"]').val();
    // Check if the selected value is a number
    if (valueTempo != "" && valuePassos != "" && valueTempo != null && valuePassos != null && !isNaN(valueTempo) && !isNaN(valuePassos)) {
      sum = parseInt(valuePassos) / (parseInt(valueTempo) / 60); // Add the selected value to the sum variable
      $('#cadencia').val(sum);
      console.log('Updated cadencia:', sum); // Print the updated sum in the console (optional)
    }
    else {
      $('#cadencia').val(0);
    }
  });

  $('input[name="passos"]').change(function () {
    var value = $(this).val();
    // Check if the selected value is a number
    if (value != "" && value != null && !isNaN(value)) {
      sum = 10 / parseInt(value); // Add the selected value to the sum variable
      $('#passada').val(sum);
      console.log('Updated passada:', sum); // Print the updated sum in the console (optional)
    }
    else {
      $('#passada').val(0);
    }
  });


  $('input[name="passos"]').change(function () {
    var value = $(this).val();
    // Check if the selected value is a number
    if (value != null && !isNaN(value)) {
      sum = 10 / parseInt(value); // Add the selected value to the sum variable
      $('#passada').val(sum);
      console.log('Updated passada:', sum); // Print the updated sum in the console (optional)
    }
    else {
      $('#passada').val(0);
    }
  });

  $('table[name="membro_inferior_table"] input[name*="_esquerdo"]').change(function () {
    var sum = 0;
    $('table[name="membro_inferior_table"] input[name*="_esquerdo"]:not([name="inferior_total_esquerdo"])').each(function () {
      var value = $(this).val();
      if (value == "" || value == null || isNaN(value)) {
        $(this).val(0);
        value = 0;
      }
      sum += parseInt(value);
    });
    $('#inferior_total_esquerdo').val(sum);
  });

  $('table[name="membro_inferior_table"] input[name*="_direito"]').change(function () {
    var sum = 0;
    $('table[name="membro_inferior_table"] input[name*="_direito"]:not([name="inferior_total_direito"])').each(function () {
      var value = $(this).val();
      if (value == "" || value == null || isNaN(value)) {
        $(this).val(0);
        value = 0;
      }
      sum += parseInt(value);
    });
    $('#inferior_total_direito').val(sum);
  });


  $('table[name="membro_superior_table"] input[name*="_esquerdo"]').change(function () {
    var sum = 0;
    $('table[name="membro_superior_table"] input[name*="_esquerdo"]:not([name="superior_total_esquerdo"])').each(function () {
      var value = $(this).val();
      if (value == "" || value == null || isNaN(value)) {
        $(this).val(0);
        value = 0;
      }
      sum += parseInt(value);
    });
    $('#superior_total_esquerdo').val(sum);
  });


  $('table[name="membro_superior_table"] input[name*="_direito"]').change(function () {
    var sum = 0;
    $('table[name="membro_superior_table"] input[name*="_direito"]:not([name="superior_total_direito"])').each(function () {
      var value = $(this).val();
      if (value == "" || value == null || isNaN(value)) {
        $(this).val(0);
        value = 0;
      }
      sum += parseInt(value);
    });
    $('#superior_total_direito').val(sum);
  });


  $('select[name="outcome_score_principal"], select[name="outcome_score_sec_1"]').change(function () {
    var value1 = $('select[name="outcome_score_principal"]').val();
    var value2 = $('select[name="outcome_score_sec_1"]').val();
    var sum = 50 + ((10 * (parseInt(value1) + parseInt(value2)) / 1.61))
    $('#achieved-gastscore_1').val(sum.toPrecision(4));
    $('#change-gastscore_1').val((sum - 37.58).toPrecision(4));
  });


  $('select[name="outcome_score_principal"], select[name="outcome_score_sec_2"]').change(function () {
    var value1 = $('select[name="outcome_score_principal"]').val();
    var value2 = $('select[name="outcome_score_sec_1"]').val();
    var value3 = $('select[name="outcome_score_sec_2"]').val();
    
    var sum = 50 + ((10 * (parseInt(value1) + parseInt(value2) + parseInt(value3)) / 2.2))
    $('#achieved-gastscore_2').val(sum.toPrecision(4));
    $('#change-gastscore_2').val((sum - 36.36).toPrecision(4));
  });


  $('select[name="outcome_score_principal"], select[name="outcome_score_sec_3"]').change(function () {
    var value1 = $('select[name="outcome_score_principal"]').val();
    var value2 = $('select[name="outcome_score_sec_1"]').val();
    var value3 = $('select[name="outcome_score_sec_2"]').val();
    var value4 = $('select[name="outcome_score_sec_3"]').val();
    var sum = 50 + ((10 * (parseInt(value1) + parseInt(value2) + parseInt(value3) + parseInt(value4)) / 2.76))
    $('#achieved-gastscore_3').val(sum.toPrecision(4));
    $('#change-gastscore_3').val((sum - 35.51).toPrecision(4));
  });


  document.getElementById("btnSubmit").onclick = function() {submissionInfo()};

  function submissionInfo() {
    var now = new Date();
    now.setMinutes(now.getMinutes() - now.getTimezoneOffset());
    document.getElementById('submissionDateTime').value = now.toISOString();
  }

  $('form').submit(function (e) {

    var now = new Date();
    now.setMinutes(now.getMinutes() - now.getTimezoneOffset());
    document.getElementById('submissionDateTime').value = now.toISOString();

    //prevent default
    e.preventDefault();
    var soma = parseInt($('#superior_total_direito').val()) + parseInt($('#superior_total_esquerdo').val()) +
      parseInt($('#inferior_total_direito').val()) + parseInt($('#inferior_total_esquerdo').val()) + 
      parseInt($('#cara_direito').val()) + parseInt($('#cara_esquerdo').val()) + 
      parseInt($('#outros_direito').val()) + parseInt($('#outros_esquerdo').val());

    var dose = parseInt($('#toxina_dosagem').val())
    if (soma != dose) {
      alert('A SOMA TOTAL DOS MEMBROS SUPERIORES + INFERIORES + OUTROS NÃO EQUIVALE À DOSAGEM INDICADA PREVIAMENTE!\n' +
        'Total esperado:' + dose + ' | Total obtido:' + soma);
      return false;
    }

    var date1 = new Date($('#nascDate').val());
    var date2 = new Date($('#avcDate').val());
    var date3 = new Date($('#aplicationDate').val());

    if (date1 >= date2) {
      alert('A DATA DE NASCIMENTO ENCONTRA-SE IGUAL OU SUPERIOR À DATA DO AVC');
      return false;
    } else if (date2 >= date3) {
      alert('A DATA DO AVC ENCONTRA-SE IGUAL OU SUPERIOR À DATA DE APLICAÇÃO');
      return false;
    }





    e.currentTarget.submit();

  });
});

