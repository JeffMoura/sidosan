<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class FuncionarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required',
            'data' => 'required',
            'telefone' => 'required',
            'email' => 'required',
        ];
    }
    /**
     * Customizando as mensagens
     *
     * @return void
     */
    public function messages()
    {
        return [
            'required'  => 'O campo :attribute é obrigatório',
        ];
    }
    /**
     * Customizando o nome dos campos, caso queira colocar acento e escrever de
     * outra forma
     *
     * @return void
     */
    public function attributes()
    {
        return [
            'nome' => 'Nome',
            'data' => 'Data de Admissão',
            'telefone' => 'Telefone',
            'email' => 'E-mail'

        ];
    }
}
