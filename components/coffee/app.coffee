$(document).ready ->
	navListItems = $('div.setup-panel div a')
	allWells = $('.setup-content')
	allNextBtn = $('.nextBtn')
	allWells.show()

	lev2_container = $('#has-sub2')
	lev3_container = $('#has-sub3')
	lev4_container = $('#has-sub4')

		
	# if $(level2).siblings().hasClass 'has-sub'
	# 	level3 = $(this).siblings()[0]
	# 	console.log level3
	
	navListItems.click (e) ->
		e.preventDefault()
		$target = $($(this).attr('href'))
		$item = $(this)
		if !$item.hasClass('disabled')
			navListItems.removeClass('btn-primary').addClass 'btn-default'
			$item.addClass 'btn-primary'
			allWells.hide()
			$target.show()
			$target.find('input:eq(0)').focus()
		return
	
	allNextBtn.click ->
		curStep = $(this).closest('.setup-content')
		curStepBtn = curStep.attr('id')
		nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children('a')
		curInputs = curStep.find('input[type=\'text\'],input[type=\'url\']')
		isValid = true
		$('.form-input-wrapper').removeClass 'has-error'
		i = 0
		while i < curInputs.length
			if !curInputs[i].validity.valid
				isValid = false
				$(curInputs[i]).closest('.form-group').addClass 'has-error'
			i++
			
			if isValid
				nextStepWizard.removeAttr('disabled').trigger 'click'
		return
	
	$('div.setup-panel div a.btn-primary').trigger 'click'
	# Registration URL
	# Hidden by default
	$('#website-wrapper').css 'display', 'none'
	$('#website').click (event) ->
		console.log '#website'
		return
	
	AmCharts.makeChart 'mapdiv',
		'type': 'map'
		'dataProvider':
			'map': 'ghanaHigh'
			'getAreasFromMap': true
		'areasSettings':
			'autoZoom': false
		'smallMap': false
	return

# Budget type chooser
$ ->
	budget = []
# Get reference to the second widget
# on the budget page and hide it by default
	widget = $('div.widget')[1]
	# $(widget).css 'display', 'none'
	
	submitBtn = $('#submit-btn')
	# submitBtn.css 'display', 'none'

	# Budget Amount chooser
	$('div.money_wrapper').find('div.money_chooser_item').on 'click', ->
		$(this).parent().parent().parent().find('div.money_chooser_item').removeClass 'selected'
		$(this).addClass 'selected'

		if $(this).hasClass 'selected'
			input = $(this).find('input[type="radio"]')[0]
			budget_amount = $(input).attr 'value'
			budget.push 'budget_amount': budget_amount
			$(submitBtn).fadeIn().removeClass('hidden')

	# Budget Type chooser
	$('div.budget-chooser').find('div.budget-chooser-item').on 'click', ->
		$(this).parent().parent().parent().find('div.budget-chooser-item').removeClass 'selected'
		$(this).addClass 'selected'

		if $(this).hasClass 'selected'
			input = $(this).find('input[type="radio"]')[0]
			budget_type = $(input).attr 'value'
			budget.push 'budget_type': budget_type
			$(widget).fadeIn().removeClass('hidden')

	submitBtn.on 'click', ->
		alert 'Your budget... Press okay & check your console :)'
		console.log budget
		
	return


`
function log() {
console.log('Logging it!');
}`		

`
function CopyLevel2() {
if ($(this).siblings().hasClass('has-sub')) {
	level2 = $(this).siblings()[0]
	lev2_container.html(level2)
	lev2_container.parent().removeClass('hidden')
	console.log(level2)
}
}`

`
function CopyLevel3() {
if ($(this).siblings().hasClass('has-sub')) {
	level3 = $(this).siblings()[0]
	lev3_container.html(level3)
	lev3_container.parent().removeClass('hidden')
	console.log(level3)
}
}`

`
function CopyLevel4() {
if ($(this).siblings().hasClass('has-sub')) {
	level4 = $(this).siblings()[0]
	lev4_container.html(level4)
	lev4_container.parent().removeClass('hidden')
	console.log(level4)
}
}`
