 <?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('outro');
});

Route::get('/curso', 'Curso@listar');
Route::get('/curso/cadastrar', 'Curso@cadastrar');
Route::get('/curso/editar/{id}', 'Curso@editar');
Route::post('/curso/salvar/{id}', 'Curso@salvar');
Route::get('/curso/remover/{id}', 'Curso@remover');
Route::get('/curso/confirmar/{id}', 'Curso@confirmar');

Route::get('/turma', 'Turma@listar');
Route::get('/turma/cadastrar', 'Turma@cadastrar');
Route::get('/turma/editar/{id}', 'Turma@editar');
Route::post('/turma/salvar/{id}', 'Turma@salvar');
Route::get('/turma/remover/{id}', 'Turma@remover');
Route::get('/turma/confirmar/{id}', 'Turma@confirmar');

Route::get('/aluno', 'AlunoController@listar');
Route::get('/aluno/cadastrar', 'AlunoController@cadastrar');
Route::get('/aluno/editar', 'AlunoController@editar');
Route::get('/aluno/remover', 'AlunoController@remover');
Route::get('/aluno/gerar/relatorio/{id}', 'AlunoController@gerarRelatorio');
Route::get('/aluno/gerar/certificado/{id}', 'AlunoController@gerarCertificado');
Route::post('/aluno/salvar/{id}', 'AlunoController@salvar');
Route::post('/aluno/confirmar/{id}', 'AlunoController@confirmar');

Route::get('/disciplina', 'Disciplina@listar');
Route::get('/disciplina/cadastrar', 'Disciplina@cadastrar');
Route::get('/disciplina/editar/{id}', 'Disciplina@editar');
Route::post('/disciplina/salvar/{id}', 'Disciplina@salvar');
Route::get('/disciplina/remover/{id}', 'Disciplina@remover');
Route::get('/disciplina/confirmar/{id}', 'Disciplina@confirmar');

Route::get('/conteudo/cadastrar/{id}', 'Conteudo@cadastrar');
Route::get('/conteudo/editar/{id}', 'Conteudo@editar');
Route::post('/conteudo/salvar/{id}', 'Conteudo@salvar');
Route::get('/conteudo/remover/{id}', 'Conteudo@remover');
Route::get('/conteudo/confirmar/{id}', 'Conteudo@confirmar');

Route::get('/atividade/cadastrar/{id}', 'Atividade@cadastrar');
Route::get('/atividade/editar/{id}', 'Atividade@editar');
Route::post('/atividade/salvar/{id}', 'Atividade@salvar');
Route::get('/atividade/remover/{id}', 'Atividade@remover');
Route::get('/atividade/confirmar/{id}', 'Atividade@confirmar');

Route::get('/peso/editar/{id}', 'Peso@editar');
Route::post('/peso/salvar/{id}', 'Peso@salvar');

Route::get('/importar', 'Importar@listar');
Route::get('/exportar', 'Exportar@listar');

Route::get('/conceito', 'ConceitoController@listar');
Route::get('/relatorio', 'RelatorioController@listar');
Route::post('/relatorio', 'RelatorioController@gerarRelatorio');
Route::get('/importar', 'ImportarController@listar');
Route::get('/exportar', 'ExportarController@listar');
