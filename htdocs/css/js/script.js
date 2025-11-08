$(document).ready(function() {
  $('#nascimento').on('change', function() {
    const nascimento = new Date($(this).val());
    const hoje = new Date();
    let idade = hoje.getFullYear() - nascimento.getFullYear();
    const m = hoje.getMonth() - nascimento.getMonth();
    if (m < 0 || (m === 0 && hoje.getDate() < nascimento.getDate())) idade--;
    $('#idade').val(idade);
  });

  $('#add-experience').click(function() {
    const item = $('.experiencia-item:first').clone();
    item.find('input, textarea').val('');
    $('#experiencias-list').append(item);
  });

  $(document).on('click', '.remove-experience', function() {
    if ($('.experiencia-item').length > 1)
      $(this).parent('.experiencia-item').remove();
  });

  $('#add-reference').click(function() {
    const item = $('.referencia-item:first').clone();
    item.find('input').val('');
    $('#referencias-list').append(item);
  });

  $(document).on('click', '.remove-reference', function() {
    if ($('.referencia-item').length > 1)
      $(this).parent('.referencia-item').remove();
  });
});
