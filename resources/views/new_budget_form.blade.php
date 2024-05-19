<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 10 Custom Login and Registration</title>
    <link rel="stylesheet" href="/public/css/new_budget.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">PF</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Головна</a>
                </li>
            </ul>
            <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Вихід</button>
            </form>
        </div>
    </div>
</nav>

<div class="container-fluid ps-5">
    <h2 class="text-center mb-5">Заповніть дані про бюджет</h2>
    <div class="row align-items-start ">
        <div class="col-9">
            <div class="row align-items-start margin-right">
                <h4 class="mb-4">Прибутки:</h4>
                <div class="col">
                    <div style="margin-bottom: 15px;">
                        <div class="form-group">
                            <label class="control-label col-sm-8">Заробітна плата</label>
                            <div class="col-sm-8">
                                <input id="salary" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div style="margin-bottom: 15px;">
                        <div class="form-group">
                            <label class="control-label col-sm-8">Додатковий дохід (бонуси, премії, підробіток)</label>
                            <div class="col-sm-8">
                                <input id="additional_income" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div style="margin-bottom: 15px;">
                        <div class="form-group">
                            <label class="control-label col-sm-8">Інвестиційний дохід (дивіденди, відсотки з вкладів)</label>
                            <div class="col-sm-8">
                                <input id="investment_income" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div style="margin-bottom: 15px;">
                        <div class="form-group">
                            <label class="control-label col-sm-8">Соціальні виплати (допомоги, стипендії)</label>
                            <div class="col-sm-8">
                                <input id="social_benefits" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row align-items-start">
                    <h4 class="mb-4">Витрати:</h4>
                    <div class="col">
                        <div style="margin-bottom: 15px;">
                            <div class="form-group">
                                <label class="control-label col-sm-8">Житло (оренда/кредит за житло, комунальні послуги, ремонт)</label>
                                <div class="col-sm-8">
                                    <input id="housing_expenses" type="text" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div style="margin-bottom: 15px;">
                            <div class="form-group">
                                <label class="control-label col-sm-8">Їжа (продукти харчування, ресторани, доставка їжі)</label>
                                <div class="col-sm-8">
                                    <input id="food_expenses" type="text" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div style="margin-bottom: 15px;">
                            <div class="form-group">
                                <label class="control-label col-sm-8">Транспорт (паливо, обслуговування авто, громадський транспорт, таксі)</label>
                                <div class="col-sm-8">
                                    <input id="transport_expenses" type="text" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div style="margin-bottom: 15px;">
                            <div class="form-group">
                                <label class="control-label col-sm-8">Одяг та взуття</label>
                                <div class="col-sm-8">
                                    <input id="clothing_expenses" type="text" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div style="margin-bottom: 15px;">
                            <div class="form-group">
                                <label class="control-label col-sm-8">Медичні послуги та страхування</label>
                                <div class="col-sm-8">
                                    <input id="medical_expenses" type="text" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div style="margin-bottom: 15px;">
                            <div class="form-group">
                                <label class="control-label col-sm-8">Розваги (кіно, концерти, подорожі)</label>
                                <div class="col-sm-8">
                                    <input id="entertainment_expenses" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">

                        <div style="margin-bottom: 15px;">
                            <div class="form-group">
                                <label class="control-label col-sm-8">Комунальні послуги (електроенергія, вода, газ)</label>
                                <div class="col-sm-8">
                                    <input id="utilities_expenses" type="text" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div style="margin-bottom: 15px;">
                            <div class="form-group">
                                <label class="control-label col-sm-8">Кредити/позики</label>
                                <div class="col-sm-8">
                                    <input id="credit_loans_expenses" type="text" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div style="margin-bottom: 15px;">
                            <div class="form-group">
                                <label class="control-label col-sm-8">Освіта (курси, навчання, підручники)</label>
                                <div class="col-sm-8">
                                    <input id="education_expenses" type="text" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div style="margin-bottom: 15px;">
                            <div class="form-group">
                                <label class="control-label col-sm-8">Спорт (фітнес-центри, спортивне спорядження)</label>
                                <div class="col-sm-8">
                                    <input id="sports_expenses" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div style="margin-bottom: 15px;">
                            <div class="form-group">
                                <label class="control-label col-sm-8">Відкладення на цільовий фонд (подорожі, купівля авто, купівля житла, пенсійний накопичувальний фонд тощо)</label>
                                <div class="col-sm-8">
                                    <input id="savings_expenses" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div style="margin-bottom: 15px;">
                            <div class="form-group">
                                <label class="control-label col-sm-8">Благодійні внески</label>
                                <div class="col-sm-8">
                                    <input id="charitable_expenses" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3 pt-5">
            <div>    <h2  class="display-4 text-success font-weight-bold" id="income_sum">+25 000 грн</h2>
                <h2 class="display-4 text-danger font-weight-bold" id="expenses_sum">-22 000 грн</h2>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col border-dark border-bottom border-3"></div>
                    </div>
                </div>

                <h2 id="budget_balance" class="display-4 text-success font-weight-bold">+3 000 грн</h2>

                <button type="button" class="btn btn-primary btn-lg">Затвердити бюджет<span class="glyphicon glyphicon-plus"></span></button></div>
        </div>
    </div>


</div>

<script src="/js/new_budget_calculation.js"></script>
</body>
</html>
