<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    //Datos de inicialización
    /*         DB::table('roles')->insertGetId([
            'rol' => 'admin_propiedad',
            'desc_rol' => 'Administrador de la propiedad horizontal',
        ]);

        $rol = DB::table('roles')->insertGetId([
            'rol' => 'residente',
            'desc_rol' => 'Residente de la propiedad horizontal',
        ]);

        DB::table('users')->insert([
            'name' => 'Jorge Osorio',
            'email' => 'jorgearmanbolivar'.'@hotmail.com',
            'rol_id' => $rol,
            'password'=>''
        ]); */

    DB::table('zonas_comunes')->insert([
      'nombre' => 'Piscina',
      'descripcion' => '
            {
                "piscina": {
                "nombre": "Piscina",
                "descripcion": "Una amplia piscina aclimatizada para el disfrute y relajación de los residentes. Ideal los momentos de ocio.",
                "detalles_adicionales": {
                  "tamaño": "10 metros de largo, 6 metros de ancho, 0.60 metros de profundidad en la parte menos profunda y una profundidad máxima de 1.60 metros",
                  "horario": "08:00 - 21:00",
                   "servicios": ["Tumbonas y sombrillas", "Duchas", "Áreas verdes alrededor de la piscina"],
                  "reservacion": {
                    "Uso": [
                      "La piscina está disponible para uso de los residentes todos los días de la semana, en horarios específicos.",
                      "Se deben seguir las normas y regulaciones de seguridad al usar la piscina."
                    ],
                    "Normas_de_seguridad": [
                      "Los niños deben estar acompañados por un adulto en todo momento.",
                      "No se permite el ingreso con alimentos o bebidas a la piscina.",
                      "Se debe usar ropa de baño adecuada."
                    ],
                    "Sanciones": [
                      "El incumplimiento de las normas de seguridad puede resultar en la prohibición temporal de uso de la piscina."
                    ]
                  },
                  "capacidad": "30"
                },
                "costo": {
                  "precio_por_hora": "10000",
                  "minimo_de_horas": "1"
                },
                "politica_cancelacion": {
                  "cancelacion_24_horas": "Cancelación sin costo hasta 24 horas antes del uso reservado.",
                  "cancelacion_menos_24_horas": "Cobro del 50% si se cancela con menos de 24 horas de antelación.",
                  "cancelacion_no_canceladas": "Se cobrará el total si no se cancela la reserva."
                }
              }
            }',
      'cantidad' => '1',
      'valor' => '10000',
      'img' => 'https://www.elmondelapiscina.com/wp-content/uploads/2019/12/cupula-alta-climatizacion-piscinas-5-1.jpg'
    ]);

    DB::table('zonas_comunes')->insert([
      'nombre' => 'Zona BBQ',
      'descripcion' => '
            {
                "zona_BBQ": {
                    "nombre": "Zona BBQ",
                    "descripcion": "Espacio equipado con parrilleras y mesas para realizar reuniones y compartir momentos agradables.",
                    "detalles_adicionales": {
                      "ubicacion": "Terraza Torre B",
                      "reservacion":{
                                  "Uso": [
                        "La zona BBQ está disponible para alquilar todos los días de la semana, de 08:00 a 22:00 horas.",
                        "La zona BBQ está equipada con parrillas, mesas y sillas.",
                        "Los usuarios deben traer sus propios alimentos y bebidas.",
                        "Los usuarios deben limpiar la zona BBQ después de su uso."
                      ],
                      "Normas_de_seguridad": [
                        "Está prohibido fumar en la zona BBQ.",
                        "Está prohibido dejar materiales inflamables en la zona BBQ.",
                        "Está prohibido encender fuegos artificiales en la zona BBQ."
                      ],
                      "Sanciones": [
                        "El incumplimiento de las normas de reserva o uso de la zona BBQ puede conllevar la cancelación de la reserva o el desalojo de la zona."
                      ],
                      "Exclusiones": [
                        "Los menores de edad solo pueden usar la zona BBQ acompañados de un adulto.",
                        "Los animales no están permitidos en la zona BBQ."
                      ]
                      },
                      "horario": "08:00 - 22:00"
                    },
                    "costo": {
                      "precio_por_hora": "100000",
                      "minimo_de_horas": "2"
                    },
                    "politica_cancelacion": {
                      "cancelacion_24_horas": "Cancelación sin costo hasta 24 horas antes del uso reservado.",
                      "cancelacion_menos_24_horas": "Cobro del 50% si se cancela con menos de 24 horas de antelación.",
                      "cancelacion_no_canceladas": "Se cobrará el total si no se cancela la reserva."
                    }
                  }
            }',
      'cantidad' => '1',
      'valor' => '100000',
      'img' => 'https://www.realtormanagers.com/ckfinder/userfiles/images/BBQ%203(1).jpeg'
    ]);

    DB::table('zonas_comunes')->insert([
      'nombre' => 'Salón Comunal',
      'descripcion' => '
            {
                "salon_comunal": {
                    "nombre": "Salón Comunal",
                    "descripcion": "Un espacio multifuncional para eventos y reuniones sociales. Equipado para distintas actividades.",
                    "detalles_adicionales": {
                      "capacidad": "50",
                     "servicios": ["Proyector y pantalla", "Equipo de sonido", "Mobiliario (mesas y sillas)", "Cocina equipada"],
                      "reservacion":{
                        "Uso": [
                        "El salón comunal está disponible para alquilar todos los días de la semana, de 08:00 a 22:00 horas.",
                        "El salón comunal está equipado con mesas, sillas, proyector, pantalla y equipo de sonido.",
                        "Los usuarios deben traer sus propios alimentos y bebidas.",
                        "Los usuarios deben limpiar el salón comunal después de su uso."
                      ],
                      "Normas_de_seguridad": [
                        "Está prohibido fumar en el salón comunal.",
                        "Está prohibido dejar materiales inflamables en el salón comunal.",
                        "Está prohibido encender fuegos artificiales en el salón comunal."
                      ],
                      "Sanciones": [
                        "El incumplimiento de las normas de reserva o uso del salón comunal puede conllevar la cancelación de la reserva o el desalojo del salón."
                      ],
                      "Exclusiones": [
                        "Los menores de edad solo pueden usar el salón comunal acompañados de un adulto.",
                        "Los animales no están permitidos en el salón comunal."
                      ],
                      "Adiciones_especificas": [
                        "Se puede cobrar un suplemento por el uso de equipos específicos, como el proyector o el equipo de sonido.",
                        "Se pueden establecer restricciones de uso para determinados eventos, como fiestas o eventos con música alta.",
                        "Se pueden requerir certificados de seguridad para eventos que impliquen el uso de materiales peligrosos."
                      ]
                      },
                      "horario": "08:00 - 22:00"
                    },
                    "costo": {
                      "precio_por_hora": "200000",
                      "minimo_de_horas": "2"
                    },
                    "politica_cancelacion": {
                      "cancelacion_24_horas": "Cancelación sin costo hasta 24 horas antes del uso reservado.",
                      "cancelacion_menos_24_horas": "Cobro del 50% si se cancela con menos de 24 horas de antelación.",
                      "cancelacion_no_canceladas": "Se cobrará el total si no se cancela la reserva."
                    }
                  } 
            }',
      'cantidad' => '1',
      'valor' => '200000',
      'img' => 'https://arriendo.com.co/ws/image.php?img=https%3A%2F%2Fremax.azureedge.net%2Fuserimages%2F66%2FLarge%2FL_6b8292b91e49491d8bcde7ba3be4b79b.jpg'
    ]);

    DB::table('zonas_comunes')->insert([
      'nombre' => 'Cancha de Tenis',
      'descripcion' => '
            {
                "cancha_de_tenis": {
                    "nombre": "Cancha de Tenis",
                    "descripcion": "Una cancha moderna para los amantes del tenis. Perfecta para jugar y entrenar.",
                    "detalles_adicionales": {
                      "superficie": "Tipo de superficie de la cancha",
                      "iluminacion": "Disponibilidad de iluminación para jugar de noche",
                                "servicios": ["Vestuarios con duchas", "Banca de descanso", "Área de espera para espectadores"],
                      "reservacion": {
                        "Uso": [
                          "La cancha de tenis está disponible para reservar todos los días de la semana, en horarios específicos.",
                          "Se deben seguir las normas y regulaciones de uso al utilizar la cancha de tenis."
                        ],
                        "Normas_de_uso": [
                          "Se debe usar ropa y calzado deportivo adecuado.",
                          "No se permite jugar con bebidas o alimentos en la cancha.",
                          "Mantener la cancha limpia y recoger la basura después de su uso."
                        ],
                        "Sanciones": [
                          "El incumplimiento de las normas de uso puede resultar en la suspensión temporal del acceso a la cancha."
                        ]
                      },
                      "horario": "08:00 - 22:00"
                    },
                    "costo": {
                      "precio_por_hora": "50000",
                      "minimo_de_horas": "1"
                    },
                    "politica_cancelacion": {
                      "cancelacion_24_horas": "Cancelación sin costo hasta 24 horas antes del uso reservado.",
                      "cancelacion_menos_24_horas": "Cobro del 50% si se cancela con menos de 24 horas de antelación.",
                      "cancelacion_no_canceladas": "Se cobrará el total si no se cancela la reserva."
                    }
                  }
            }',
      'cantidad' => '1',
      'valor' => '50000',
      'img' => 'https://prodesa.com/wp-content/uploads/2022/04/Canchas_tenis_vista_lateral-Macroproyecto-de-Casas-Campestres-NO-VIS-Palo-de-Agua.jpg'
    ]);
  }
}
