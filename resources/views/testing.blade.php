<html>
    <table border="1">
        <tr>
            <th>NAMA DEPARTEMEN</th>
            <th>NOMOR DEPARTEMEN</th>
            <th>WILAYAH</th>
            <th>ALAMAT KEDUA</th>
            <th>NOMOR SIREN</th>
            <th>NOMOR SIRET</th>
            <th>KODE VAT</th>
            <th>NOMOR SOSIAL KEAMANAN</th>
            <th>NOMOR TELEPON</th>
            <th>NOMOR HP</th>
            <th>NOMOR LAYANAN</th>
        </tr>
        <?php
        // $faker = Faker\Factory::create();
        $faker = new Faker\Generator();
        $faker->addProvider(new Faker\Provider\fr_FR\Address($faker));
        $faker->addProvider(new Faker\Provider\fr_FR\Company($faker));
        $faker->addProvider(new Faker\Provider\fr_FR\Payment($faker));
        $faker->addProvider(new Faker\Provider\fr_FR\Person($faker));
        $faker->addProvider(new Faker\Provider\fr_FR\PhoneNumber($faker));

        for ($i = 0; $i < 10; $i++) {
            echo "
            <tr>
                <td>
                    $faker->departmentName
                </td>
                <td>
                    $faker->departmentNumber
                </td>
                <td>
                    $faker->region
                </td>
                <td>
                    $faker->secondaryAddress
                </td>
                <td>
                    $faker->siren
                </td>
                <td>
                    $faker->siret
                </td>
                <td>
                    $faker->vat
                </td>
                <td>
                    $faker->nir
                </td>
                <td>
                    $faker->phoneNumber
                </td>
                <td>
                    $faker->mobileNumber
                </td>
                <td>
                    $faker->serviceNumber
                </td>
            </tr>
            ";
          }
        
        ?>
    </table>
<html>