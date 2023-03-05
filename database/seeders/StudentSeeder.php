<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // https://www.4devs.com.br/gerador_de_pessoas
        // https://www.convertcsv.com/csv-to-json.htm
        $students = [
            ["20131EWBJ0001", "080.441.944-28", "Pedro Caleb Nascimento", "Aline Maitê Daiane", "Henry Lorenzo Matheus Nascimento", "2005-01-09", "Masculino", "pedrocalebnascimento@ligananet.com.br", "(81) 99317-9800", "https://github.com/pedroc", "Campus Belo Jardim", "Engenharia de Software", 3, 1],
            ["20131EWBJ0002", "351.800.544-86", "Nathan Bruno Cauã Corte Real", "Betina Marlene Mariah", "Diego Manuel Corte Real", "2000-05-06", "Masculino", "nathanbrunocortereal@escritoriogold.com.br", "(81) 99479-1474", "https://github.com/nathanb", "Campus Belo Jardim", "Engenharia de Software", 5, 1],
            ["20131EWBJ0003", "026.792.174-89", "Carlos Vicente Pietro Moura", "Cecília Marlene", "Victor Filipe Moura", "2005-04-01", "Masculino", "carlosvicentemoura@kof.com.mx", "(81) 98930-7659", "https://github.com/carlosv", "Campus Belo Jardim", "Engenharia de Software", 1, 1],
            ["20131EWBJ0004", "561.086.174-89", "Pedro Pedro Henrique Luan Costa", "Rafaela Sueli", "Henrique Yuri Francisco Costa", "1999-07-08", "Masculino", "pedro-costa96@dicid.com.br", "(81) 99997-7477", "https://github.com/pedrop", "Campus Belo Jardim", "Engenharia de Software", 6, 1],
            ["20131EWBJ0005", "435.215.464-46", "Eliane Isabelle Ana Rezende", "Helena Isadora Silvana", "Guilherme Osvaldo Rezende", "1998-12-23", "Feminino", "eliane-rezende89@vivo.com.br", "(81) 98632-2070", "https://github.com/elianei", "Campus Belo Jardim", "Engenharia de Software", 8, 1],
            ["20131EWBJ0006", "309.427.174-06", "Gabrielly Sabrina Fogaça", "Tatiane Analu Luiza", "Marcos Vinicius Rafael Fogaça", "1996-10-07", "Feminino", "gabrielly_fogaca@ssala.com.br", "(81) 98127-9291", "https://github.com/gabriellys", "Campus Belo Jardim", "Engenharia de Software", 7, 1],
            ["20131EWBJ0007", "784.480.944-25", "Stefany Bárbara da Mota", "Juliana Sabrina Luna", "Cláudio Samuel Oliver da Mota", "1999-08-13", "Feminino", "stefany_barbara_damota@contjulioroberto.com.br", "(81) 98197-9104", "https://github.com/stefanyb", "Campus Belo Jardim", "Engenharia de Software", 2, 1],
            ["20131EWBJ0008", "748.004.184-53", "Luan Arthur Souza", "Rita Cláudia", "Felipe André Souza", "2000-05-08", "Masculino", "luan-souza91@academiaconcerto.art.br", "(81) 98448-7673", "https://github.com/luana", "Campus Belo Jardim", "Engenharia de Software", 5, 1],
            ["20131EWBJ0009", "654.241.124-04", "Andrea Emanuelly Marlene Peixoto", "Luciana Sophia Esther", "Raimundo César Levi Peixoto", "2000-02-12", "Feminino", "andrea_emanuelly_peixoto@vivax.com", "(81) 99106-6694", "https://github.com/andreae", "Campus Belo Jardim", "Engenharia de Software", 4, 1],
            ["20131EWBJ0010", "362.039.054-10", "Nicole Giovana Agatha Pinto", "Helena Francisca", "Mateus Ian Pinto", "1998-09-09", "Feminino", "nicolegiovanapinto@i9tec.com.br", "(81) 98350-9029", "https://github.com/nicoleg", "Campus Belo Jardim", "Engenharia de Software", 4, 1],
            ["20131EWBJ0011", "338.232.924-71", "Malu Benedita Cristiane Alves", "Lavínia Rebeca", "Henry Bento Guilherme Alves", "1995-12-17", "Feminino", "malu-alves79@boldcron.com.br", "(87) 98265-9428", "https://github.com/malub", "Campus Belo Jardim", "Engenharia de Software", 8, 1],
            ["20131EWBJ0012", "185.618.424-23", "Vera Antonella Moraes", "Catarina Andrea", "Joaquim Anderson Anthony Moraes", "2001-11-25", "Feminino", "vera-moraes78@pichler.com.br", "(81) 99247-9637", "https://github.com/veraa", "Campus Belo Jardim", "Engenharia de Software", 6, 1],
            ["20131EWBJ0013", "031.658.104-60", "Isabelle Sara Camila Ramos", "Luna Rayssa", "Murilo Renan Igor Ramos", "1997-06-14", "Feminino", "isabelle_sara_ramos@aedu.com", "(87) 98490-2211", "https://github.com/isabelles", "Campus Belo Jardim", "Engenharia de Software", 3, 1],
            ["20131EWBJ0014", "821.825.634-23", "Lorenzo Manuel Benjamin Pires", "Cristiane Eliane", "Cauê Luiz Diego Pires", "1995-10-10", "Masculino", "lorenzo_pires@dizain.com.br", "(81) 99474-0835", "https://github.com/lorenzom", "Campus Belo Jardim", "Engenharia de Software", 4, 1],
            ["20131EWBJ0015", "466.518.874-24", "Yasmin Emily Ribeiro", "Tânia Patrícia", "Ryan Marcos Ribeiro", "1995-04-15", "Feminino", "yasminemilyribeiro@silnave.com.br", "(81) 99498-7780", "https://github.com/yasmine", "Campus Belo Jardim", "Engenharia de Software", 4, 1],
            ["20131EWBJ0016", "204.279.744-88", "Amanda Eloá Monteiro", "Rebeca Carla", "Juan Ruan Otávio Monteiro", "1997-07-08", "Feminino", "amandaeloamonteiro@gmx.de", "(81) 98426-8377", "https://github.com/amandae", "Campus Belo Jardim", "Engenharia de Software", 8, 1],
            ["20131EWBJ0017", "163.832.954-03", "Nair Sueli Dias", "Pietra Tatiane", "Antonio Kaique Dias", "1999-02-25", "Feminino", "nair.sueli.dias@outershoes.com.br", "(81) 99199-1545", "https://github.com/nairs", "Campus Belo Jardim", "Engenharia de Software", 6, 1],
            ["20131EWBJ0018", "427.102.144-07", "Jennifer Milena Fátima Aparício", "Sônia Emily Carolina", "Gustavo Fábio Matheus Aparício", "1999-12-08", "Feminino", "jennifer.milena.aparicio@albap.com.br", "(81) 98164-2692", "https://github.com/jenniferm", "Campus Belo Jardim", "Engenharia de Software", 4, 1],
            ["20131EWBJ0019", "447.375.254-21", "Cláudia Sarah Vitória Jesus", "Pietra Antonella Mariah", "Marcelo Rodrigo Daniel Jesus", "2000-05-21", "Feminino", "claudiasarahjesus@its.jnj.com", "(81) 99796-6747", "https://github.com/cláudias", "Campus Belo Jardim", "Engenharia de Software", 3, 1],
            ["20131EWBJ0020", "559.352.244-88", "Evelyn Antonella Rita Almada", "Caroline Sabrina", "Enzo João Almada", "2001-08-03", "Feminino", "evelyn_antonella_almada@dyna.com.br", "(81) 99986-9899", "https://github.com/evelyna", "Campus Belo Jardim", "Engenharia de Software", 4, 1],
            ["20131EWBJ0021", "197.525.734-01", "Malu Elaine Vera Castro", "Hadassa Joana", "Vitor Emanuel Castro", "2003-08-16", "Feminino", "malu.elaine.castro@claro.com.br", "(81) 99848-9686", "https://github.com/malue", "Campus Belo Jardim", "Engenharia de Software", 3, 2],
            ["20131EWBJ0022", "095.040.714-30", "Yuri Nathan Rodrigues", "Sara Isis", "Mário Thales Rodrigues", "2001-02-15", "Masculino", "yurinathanrodrigues@parkhotel.com.br", "(81) 98660-1739", "https://github.com/yurin", "Campus Belo Jardim", "Engenharia de Software", 6, 2],
            ["20131EWBJ0023", "350.209.134-05", "Rodrigo Kauê Benjamin da Conceição", "Nina Sara Eliane", "Caio Samuel da Conceição", "2005-08-28", "Masculino", "rodrigo_daconceicao@afsn.com.br", "(81) 98435-5380", "https://github.com/rodrigok", "Campus Belo Jardim", "Engenharia de Software", 3, 2],
            ["20131EWBJ0024", "177.687.904-05", "Esther Isabel Carla Freitas", "Daiane Fernanda Vera", "Arthur Igor Freitas", "1996-03-26", "Feminino", "esther.isabel.freitas@aol.com", "(81) 99684-1109", "https://github.com/estheri", "Campus Belo Jardim", "Engenharia de Software", 5, 2],
            ["20131EWBJ0025", "594.180.634-50", "Gabrielly Gabriela Fernandes", "Louise Silvana", "Lucas Thales Fernandes", "2003-06-07", "Feminino", "gabrielly_fernandes@fiorecomunicacao.com.br", "(81) 99639-0107", "https://github.com/gabriellyg", "Campus Belo Jardim", "Engenharia de Software", 3, 2],
            ["20131EWBJ0026", "764.698.604-60", "Nina Mariana Letícia Cardoso", "Sophia Allana", "Vinicius Gabriel Cardoso", "1999-07-25", "Feminino", "nina-cardoso74@googlemail.com", "(81) 98538-6061", "https://github.com/ninam", "Campus Belo Jardim", "Engenharia de Software", 5, 2],
            ["20131EWBJ0027", "771.460.074-80", "Daniel Caleb Farias", "Isis Emilly Camila", "Pietro Joaquim Diego Farias", "1999-01-04", "Masculino", "daniel_farias@madhause.com.br", "(81) 99430-1770", "https://github.com/danielc", "Campus Belo Jardim", "Engenharia de Software", 5, 2],
            ["20131EWBJ0028", "138.642.594-01", "Victor Bruno Melo", "Cecília Eduarda Agatha", "Miguel Benedito Melo", "1999-11-26", "Masculino", "victor_melo@icloub.com", "(81) 98267-0346", "https://github.com/victorb", "Campus Belo Jardim", "Engenharia de Software", 7, 2],
            ["20131EWBJ0029", "787.186.734-22", "Antônia Fernanda Ferreira", "Allana Cristiane", "Nathan Martin Bryan Ferreira", "1998-02-06", "Feminino", "antoniafernandaferreira@viasegbrasil.com.br", "(81) 98203-0869", "https://github.com/antôniaf", "Campus Belo Jardim", "Engenharia de Software", 3, 2],
            ["20131EWBJ0030", "567.462.444-58", "Elza Francisca Olivia da Silva", "Alessandra Lúcia", "Juan Pedro Henrique Benedito da Silva", "1998-09-12", "Feminino", "elza_dasilva@mpcnet.com.br", "(81) 98160-0053", "https://github.com/elzaf", "Campus Belo Jardim", "Engenharia de Software", 3, 2],
            ["20131EWBJ0031", "897.497.994-29", "Joaquim Breno Figueiredo", "Sônia Alana Giovana", "Márcio Guilherme Figueiredo", "2001-07-27", "Masculino", "joaquim.breno.figueiredo@rauh.net", "(87) 98200-4118", "https://github.com/joaquimb", "Campus Belo Jardim", "Engenharia de Software", 2, 2],
            ["20131EWBJ0032", "184.992.804-55", "Juan Ryan Ferreira", "Gabriela Emanuelly", "Calebe Francisco Ferreira", "2005-11-15", "Masculino", "juan_ferreira@doucedoce.com.br", "(87) 99768-1651", "https://github.com/juanr", "Campus Belo Jardim", "Engenharia de Software", 8, 2],
            ["20131EWBJ0033", "202.746.204-05", "Eduarda Elza da Cruz", "Amanda Beatriz", "Tomás Arthur Erick da Cruz", "2002-03-21", "Feminino", "eduarda.elza.dacruz@telefonica.com", "(81) 98575-2815", "https://github.com/eduardae", "Campus Belo Jardim", "Engenharia de Software", 6, 2],
            ["20131EWBJ0034", "823.852.374-58", "Kamilly Emilly Oliveira", "Raimunda Eliane Antônia", "Benjamin Pedro Henrique Oliveira", "1999-05-10", "Feminino", "kamilly_oliveira@csa.edu.br", "(81) 98407-3783", "https://github.com/kamillye", "Campus Belo Jardim", "Engenharia de Software", 1, 2],
            ["20131EWBJ0035", "967.725.454-51", "Sebastiana Simone Moraes", "Elza Catarina", "Levi Leonardo Moraes", "1998-01-14", "Feminino", "sebastiana_moraes@futureteeth.com.br", "(81) 98814-6763", "https://github.com/sebastianas", "Campus Belo Jardim", "Engenharia de Software", 6, 2],
            ["20131EWBJ0036", "612.704.024-80", "João César Oliver da Mata", "Carolina Maya", "Gustavo Mário da Mata", "2002-03-21", "Masculino", "joao_damata@mcpsolucoesgraficas.com.br", "(81) 98151-1872", "https://github.com/joãoc", "Campus Belo Jardim", "Engenharia de Software", 4, 2],
            ["20131EWBJ0037", "463.896.024-30", "Marlene Patrícia Sabrina das Neves", "Emily Patrícia", "João Tomás das Neves", "1998-05-26", "Feminino", "marlenepatriciadasneves@nipbr.com.br", "(81) 99442-7748", "https://github.com/marlenep", "Campus Belo Jardim", "Engenharia de Software", 6, 2],
            ["20131EWBJ0038", "570.604.824-07", "Juliana Isis Julia Farias", "Sara Melissa Alice", "Anthony Calebe Raimundo Farias", "1998-04-03", "Feminino", "julianaisisfarias@terapeutaholistica.com.br", "(81) 99156-4287", "https://github.com/julianai", "Campus Belo Jardim", "Engenharia de Software", 8, 2],
            ["20131EWBJ0039", "700.877.544-01", "Vicente Carlos Eduardo Leonardo Jesus", "Vanessa Aurora Francisca", "Geraldo Henrique Benedito Jesus", "1998-05-23", "Masculino", "vicente-jesus73@danielvasconcelos.com.br", "(81) 99102-0815", "https://github.com/vicentec", "Campus Belo Jardim", "Engenharia de Software", 6, 2],
            ["20131EWBJ0040", "200.750.904-06", "Luciana Tereza Antônia Silveira", "Gabriela Luciana Sophia", "Heitor Leandro Eduardo Silveira", "1996-09-19", "Feminino", "luciana.tereza.silveira@yogoothies.com.br", "(81) 99313-1470", "https://github.com/lucianat", "Campus Belo Jardim", "Engenharia de Software", 3, 2],
            ["20131EWBJ0041", "166.535.024-57", "Anderson Felipe Levi da Rosa", "Jaqueline Allana", "Diogo Diogo Carlos Eduardo da Rosa", "2004-04-20", "Masculino", "anderson.felipe.darosa@construtoracostanorte.com.br", "(81) 98920-0342", "https://github.com/andersonf", "Campus Belo Jardim", "Engenharia de Software", 2, 3],
            ["20131EWBJ0042", "175.119.454-06", "Sônia Teresinha Eloá Teixeira", "Heloisa Analu Carolina", "Raimundo Pietro Lucca Teixeira", "1999-05-13", "Feminino", "sonia_teixeira@cladm.com.br", "(81) 98544-6741", "https://github.com/sôniat", "Campus Belo Jardim", "Engenharia de Software", 6, 3],
            ["20131EWBJ0043", "647.533.564-93", "Teresinha Esther Viana", "Lívia Francisca Heloisa", "Tomás Roberto Martin Viana", "1995-09-04", "Feminino", "teresinha_esther_viana@pibnet.com.br", "(81) 99746-2101", "https://github.com/teresinhae", "Campus Belo Jardim", "Engenharia de Software", 5, 3],
            ["20131EWBJ0044", "007.321.264-44", "Elisa Vera Gomes", "Marli Josefa Cristiane", "Henry Manuel Breno Gomes", "1996-06-01", "Feminino", "elisa.vera.gomes@gamil.com", "(81) 99479-8999", "https://github.com/elisav", "Campus Belo Jardim", "Engenharia de Software", 2, 3],
            ["20131EWBJ0045", "847.075.234-04", "Yasmin Liz Rezende", "Fabiana Lavínia", "Felipe Carlos Eduardo Sebastião Rezende", "1997-12-03", "Feminino", "yasmin-rezende87@lbrazil.com.br", "(81) 99318-8941", "https://github.com/yasminl", "Campus Belo Jardim", "Engenharia de Software", 8, 3],
            ["20131EWBJ0046", "633.704.684-68", "Thomas Guilherme Cláudio Almada", "Maria Liz", "Geraldo Ricardo Carlos Almada", "2000-10-17", "Masculino", "thomas-almada82@araraquara.com.br", "(81) 98215-1947", "https://github.com/thomasg", "Campus Belo Jardim", "Engenharia de Software", 3, 3],
            ["20131EWBJ0047", "740.424.164-20", "Liz Caroline Marina Fernandes", "Mirella Sabrina Allana", "Kevin Julio Guilherme Fernandes", "1999-01-09", "Feminino", "liz_caroline_fernandes@soelegancia.com.br", "(81) 99692-7442", "https://github.com/lizc", "Campus Belo Jardim", "Engenharia de Software", 8, 3],
            ["20131EWBJ0048", "952.487.434-27", "Bryan Erick Assis", "Agatha Allana Lorena", "Cauê Anthony Assis", "1996-08-01", "Masculino", "bryanerickassis@santosdumonthospital.com", "(87) 98805-2735", "https://github.com/bryane", "Campus Belo Jardim", "Engenharia de Software", 6, 3],
            ["20131EWBJ0049", "800.247.214-41", "Henrique Yuri Henrique Baptista", "Francisca Sophie Isis", "Anthony Ryan Baptista", "1998-03-01", "Masculino", "henrique_yuri_baptista@hotmai.com.br", "(81) 98908-9891", "https://github.com/henriquey", "Campus Belo Jardim", "Engenharia de Software", 8, 3],
            ["20131EWBJ0050", "541.541.864-42", "Bernardo Julio Pietro da Paz", "Sophia Clara Yasmin", "Sérgio Caio Francisco da Paz", "1998-02-05", "Masculino", "bernardo_julio_dapaz@iclaud.com", "(81) 98621-4327", "https://github.com/bernardoj", "Campus Belo Jardim", "Engenharia de Software", 4, 3],
            ["20131EWBJ0051", "693.647.844-13", "Marcos Nicolas Rodrigues", "Brenda Daiane Tatiane", "Pedro Henrique Antonio Renato Rodrigues", "1995-08-27", "Masculino", "marcos-rodrigues78@bluespropaganda.com", "(81) 99100-5860", "https://github.com/marcosn", "Campus Belo Jardim", "Engenharia de Software", 6, 3],
            ["20131EWBJ0052", "863.115.424-55", "Antonio Benjamin Dias", "Luciana Vanessa", "Rodrigo Kevin Gabriel Dias", "2004-08-08", "Masculino", "antonio.benjamin.dias@yahoo.ca", "(81) 99582-4346", "https://github.com/antoniob", "Campus Belo Jardim", "Engenharia de Software", 8, 3],
            ["20131EWBJ0053", "034.426.904-39", "Maya Ester Sueli da Rocha", "Sophia Raimunda", "Victor José da Rocha", "1996-10-12", "Feminino", "maya_darocha@marramoncks.com.br", "(81) 99513-2450", "https://github.com/mayae", "Campus Belo Jardim", "Engenharia de Software", 5, 3],
            ["20131EWBJ0054", "784.094.154-02", "Fábio Manoel Ribeiro", "Larissa Malu", "Francisco Bruno Ribeiro", "1995-04-02", "Masculino", "fabio_ribeiro@ocaconsultoria.com", "(81) 99338-1579", "https://github.com/fábiom", "Campus Belo Jardim", "Engenharia de Software", 5, 3],
            ["20131EWBJ0055", "599.954.644-38", "Alice Lavínia Larissa Pinto", "Clara Brenda", "Augusto Jorge Pinto", "2005-12-13", "Feminino", "alicelaviniapinto@vivax.com", "(81) 98464-8230", "https://github.com/alicel", "Campus Belo Jardim", "Engenharia de Software", 2, 3],
            ["20131EWBJ0056", "787.605.614-83", "Arthur Julio Santos", "Isis Lara", "Lucca Samuel Lucas Santos", "1996-04-19", "Masculino", "arthurjuliosantos@atiara.com.br", "(81) 99126-1722", "https://github.com/arthurj", "Campus Belo Jardim", "Engenharia de Software", 7, 3],
            ["20131EWBJ0057", "693.788.144-41", "Kamilly Marcela Mirella Peixoto", "Larissa Isis Aline", "Levi Lucca Caleb Peixoto", "2005-12-01", "Feminino", "kamillymarcelapeixoto@outlook.com", "(81) 99873-9476", "https://github.com/kamillym", "Campus Belo Jardim", "Engenharia de Software", 5, 3],
            ["20131EWBJ0058", "598.152.484-72", "Aparecida Melissa Beatriz Melo", "Sabrina Fabiana", "Enrico Miguel Melo", "1997-03-23", "Feminino", "aparecida_melissa_melo@stilomovelaria.com.br", "(81) 99127-0463", "https://github.com/aparecidam", "Campus Belo Jardim", "Engenharia de Software", 8, 3],
            ["20131EWBJ0059", "048.399.074-47", "Maria Analu Corte Real", "Rosângela Giovana Clara", "Davi Juan Corte Real", "1999-11-10", "Feminino", "maria_cortereal@csjsistemas.com.br", "(81) 99870-6700", "https://github.com/mariaa", "Campus Belo Jardim", "Engenharia de Software", 7, 3],
            ["20131EWBJ0060", "648.823.364-56", "Iago Joaquim Tomás Assunção", "Hadassa Priscila", "Osvaldo Ricardo Assunção", "2003-07-04", "Masculino", "iago_joaquim_assuncao@qualita.srv.br", "(81) 98966-7352", "https://github.com/iagoj", "Campus Belo Jardim", "Engenharia de Software", 3, 3]
        ];

        foreach ($students as $student_array) {
            $student = [
                'enrollment' => $student_array[0],
                'CPF' => $student_array[1],
                'Name' => $student_array[2],
                'motherName' => $student_array[3],
                'fatherName' => $student_array[4],
                'birthday' => $student_array[5],
                'gender' => $student_array[6],
                'email' => $student_array[7],
                'cellphone' => $student_array[8],
                'githubProfile' => $student_array[9],
                'campusName' => $student_array[10],
                'courseName' => $student_array[11],
                'currentPeriod' => $student_array[12],
                'group' => $student_array[13],
            ];
            Student::create($student);
        }

    }
}
