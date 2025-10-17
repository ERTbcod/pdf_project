# PDF Project: Gerador de Relatórios com PHP e mPDF

![Status](https://img.shields.io/badge/status-concluído-brightgreen)

![Linguagem](https://img.shields.io/badge/linguagem-PHP-blue)

![Library](https://img.shields.io/badge/library-mPDF-red)

Este é um projeto de estudo desenvolvido para explorar a geração de documentos PDF de forma dinâmica utilizando PHP e a poderosa biblioteca **mPDF**.

## 📝 Sobre o Projeto

O objetivo deste projeto é demonstrar um caso de uso prático para a criação de relatórios em PDF. O script PHP utiliza um array de dados (simulando uma consulta a um banco de dados) para construir uma tabela de produtos. Essa estrutura, juntamente com estilos CSS, é então processada pela biblioteca mPDF para gerar um documento PDF limpo e bem formatado, que é enviado diretamente para o navegador.

Este projeto serviu como um primeiro contato com a manipulação de PDFs no back-end, uma habilidade essencial para sistemas que precisam gerar faturas, relatórios, certificados e outros documentos.

---

## ✨ Funcionalidades

* **Geração Dinâmica:** O conteúdo do PDF é gerado a partir de um array de dados, tornando fácil a adaptação para fontes de dados reais como um banco de dados.
* **Estilização com CSS:** O layout e a aparência do relatório são controlados com CSS, que é injetado diretamente no código HTML antes da conversão.
* **Biblioteca Externa:** Demonstra o uso do **Composer** para gerenciar dependências e integrar bibliotecas de terceiros (mPDF) em um projeto PHP.
* **Saída Direta:** O PDF gerado é enviado diretamente para o navegador para visualização ou download imediato usando o método `Output()`.

---

## 🛠️ Tecnologias Utilizadas

* **Back-end:**
    ![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
* **Biblioteca:**
    -   **mPDF:** Para a conversão de HTML/CSS para PDF.
* **Gerenciador de Pacotes:**
    ![Composer](https://img.shields.io/badge/Composer-885610?style=for-the-badge&logo=Composer&logoColor=white)
* **Marcação e Estilo (para o template do PDF):**
    ![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
    ![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)

---

## 🚀 Como Executar o Projeto

Para rodar este projeto, você precisará de um ambiente de servidor local (como XAMPP, WAMP ou Laragon) e do **Composer** instalado globalmente em sua máquina.

1.  **Clone o repositório:**
    ```bash
    git clone [https://github.com/seu-usuario/pdf_project.git](https://github.com/seu-usuario/pdf_project.git)
    ```

2.  **Navegue até a pasta do projeto:**
    ```bash
    cd pdf_project
    ```

3.  **Instale as dependências:**
    Execute o Composer para baixar a biblioteca mPDF e suas dependências. Este comando irá criar a pasta `vendor/`.
    ```bash
    composer install
    ```

4.  **Mova para o servidor local:**
    Mova a pasta `pdf_project` para o diretório raiz do seu servidor (geralmente `htdocs` no XAMPP).

5.  **Acesse no navegador:**
    Inicie o serviço Apache e acesse o script PHP diretamente pelo navegador (o nome do arquivo pode variar):
    ```
    http://localhost/pdf_project/relatorio_produtos.php
    ```
    O navegador deverá exibir o documento PDF gerado.

---

## 🖼️ Resultado Final

Abaixo está um exemplo do relatório de produtos gerado pelo script:

Demonstração do Relatório de Produtos em PDF
[relatorio_produtos.pdf](https://github.com/user-attachments/files/22961055/relatorio_produtos.pdf)
