document.addEventListener('DOMContentLoaded', function() {
    const categorySelect = document.getElementById('categorySelect');
    const expenseCategories = [
        'Житло', 'Їжа', 'Транспорт', 'Одяг та взуття', 'Медичні послуги та страхування',
        'Розваги', 'Комунальні послуги', 'Кредити/позики', 'Освіта', 'Спорт',
        'Відкладення на цільовий фонд', 'Благодійні внески'
    ];
    const incomeCategories = [
        'Заробітна плата', 'Додатковий дохід', 'Інвестиційний дохід', 'Соціальні виплати'
    ];

    function updateCategories(categories) {
        categorySelect.innerHTML = '';
        categories.forEach(category => {
            const option = document.createElement('option');
            option.value = category;
            option.textContent = category;
            categorySelect.appendChild(option);
        });
    }

    document.querySelectorAll('input[name="accountType"]').forEach(radio => {
        radio.addEventListener('change', function() {
            if (this.value === 'expenses') {
                updateCategories(expenseCategories);
            } else if (this.value === 'income') {
                updateCategories(incomeCategories);
            }
        });
    });

    // Set default options (you can choose either 'expenses' or 'income')
    updateCategories(expenseCategories); // Default to 'expenses'
});
