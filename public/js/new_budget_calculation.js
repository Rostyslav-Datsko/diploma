document.addEventListener('DOMContentLoaded', function() {
    // Get the income sum element
    const incomeSumElement = document.getElementById('income_sum');
    // Get the expenses sum element
    const expensesSumElement = document.getElementById('expenses_sum');
    // Get the budget balance element
    const budgetBalanceElement = document.getElementById('budget_balance');

    // Function to calculate the sum of the input values
    function calculateIncomeSum() {
        const incomeSum = calculateSum([
            'salary', 'additional_income', 'investment_income', 'social_benefits'
        ]);
        incomeSumElement.textContent = `+${incomeSum.toLocaleString()} грн`;
    }

    // Function to calculate the sum of the input values
    function calculateExpensesSum() {
        const expensesSum = calculateSum([
            'housing_expenses', 'food_expenses', 'transport_expenses',
            'clothing_expenses', 'medical_expenses', 'entertainment_expenses',
            'utilities_expenses', 'credit_loans_expenses', 'education_expenses',
            'sports_expenses', 'savings_expenses', 'charitable_expenses'
        ]);
        expensesSumElement.textContent = `-${expensesSum.toLocaleString()} грн`;

        // Calculate budget balance
        const incomeSum = calculateSum([
            'salary', 'additional_income', 'investment_income', 'social_benefits'
        ]);
        const budgetBalance = incomeSum - expensesSum;
        budgetBalanceElement.textContent = `${budgetBalance.toLocaleString()} грн`;
        budgetBalanceElement.className = budgetBalance >= 0 ? 'text-xl text-green-600 dark:text-green-400' : 'text-xl text-red-600 dark:text-red-400';
    }

    // Function to calculate the sum of specified input fields
    function calculateSum(fields) {
        return fields.reduce((total, field) => {
            const inputElement = document.getElementById(field);
            const value = parseFloat(inputElement.value) || 0;
            return total + value;
        }, 0);
    }

    // Add event listeners to trigger calculations on input
    document.querySelectorAll('input[type="number"]').forEach(input => {
        input.addEventListener('input', () => {
            calculateIncomeSum();
            calculateExpensesSum();
        });
    });

    // Initial calculation
    calculateIncomeSum();
    calculateExpensesSum();
});
