<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\InfoTypeCategory;

use UnexpectedValueException;

/**
 * Enum of the current locations.
 * We might add more locations in the future.
 *
 * Protobuf type <code>google.privacy.dlp.v2.InfoTypeCategory.LocationCategory</code>
 */
class LocationCategory
{
    /**
     * Unused location
     *
     * Generated from protobuf enum <code>LOCATION_UNSPECIFIED = 0;</code>
     */
    const LOCATION_UNSPECIFIED = 0;
    /**
     * The infoType is not issued by or tied to a specific region, but is used
     * almost everywhere.
     *
     * Generated from protobuf enum <code>GLOBAL = 1;</code>
     */
    const PBGLOBAL = 1;
    /**
     * The infoType is typically used in Argentina.
     *
     * Generated from protobuf enum <code>ARGENTINA = 2;</code>
     */
    const ARGENTINA = 2;
    /**
     * The infoType is typically used in Armenia.
     *
     * Generated from protobuf enum <code>ARMENIA = 51;</code>
     */
    const ARMENIA = 51;
    /**
     * The infoType is typically used in Australia.
     *
     * Generated from protobuf enum <code>AUSTRALIA = 3;</code>
     */
    const AUSTRALIA = 3;
    /**
     * The infoType is typically used in Azerbaijan.
     *
     * Generated from protobuf enum <code>AZERBAIJAN = 48;</code>
     */
    const AZERBAIJAN = 48;
    /**
     * The infoType is typically used in Belarus.
     *
     * Generated from protobuf enum <code>BELARUS = 50;</code>
     */
    const BELARUS = 50;
    /**
     * The infoType is typically used in Belgium.
     *
     * Generated from protobuf enum <code>BELGIUM = 4;</code>
     */
    const BELGIUM = 4;
    /**
     * The infoType is typically used in Brazil.
     *
     * Generated from protobuf enum <code>BRAZIL = 5;</code>
     */
    const BRAZIL = 5;
    /**
     * The infoType is typically used in Canada.
     *
     * Generated from protobuf enum <code>CANADA = 6;</code>
     */
    const CANADA = 6;
    /**
     * The infoType is typically used in Chile.
     *
     * Generated from protobuf enum <code>CHILE = 7;</code>
     */
    const CHILE = 7;
    /**
     * The infoType is typically used in China.
     *
     * Generated from protobuf enum <code>CHINA = 8;</code>
     */
    const CHINA = 8;
    /**
     * The infoType is typically used in Colombia.
     *
     * Generated from protobuf enum <code>COLOMBIA = 9;</code>
     */
    const COLOMBIA = 9;
    /**
     * The infoType is typically used in Croatia.
     *
     * Generated from protobuf enum <code>CROATIA = 42;</code>
     */
    const CROATIA = 42;
    /**
     * The infoType is typically used in Czechia.
     *
     * Generated from protobuf enum <code>CZECHIA = 52;</code>
     */
    const CZECHIA = 52;
    /**
     * The infoType is typically used in Denmark.
     *
     * Generated from protobuf enum <code>DENMARK = 10;</code>
     */
    const DENMARK = 10;
    /**
     * The infoType is typically used in France.
     *
     * Generated from protobuf enum <code>FRANCE = 11;</code>
     */
    const FRANCE = 11;
    /**
     * The infoType is typically used in Finland.
     *
     * Generated from protobuf enum <code>FINLAND = 12;</code>
     */
    const FINLAND = 12;
    /**
     * The infoType is typically used in Germany.
     *
     * Generated from protobuf enum <code>GERMANY = 13;</code>
     */
    const GERMANY = 13;
    /**
     * The infoType is typically used in Hong Kong.
     *
     * Generated from protobuf enum <code>HONG_KONG = 14;</code>
     */
    const HONG_KONG = 14;
    /**
     * The infoType is typically used in India.
     *
     * Generated from protobuf enum <code>INDIA = 15;</code>
     */
    const INDIA = 15;
    /**
     * The infoType is typically used in Indonesia.
     *
     * Generated from protobuf enum <code>INDONESIA = 16;</code>
     */
    const INDONESIA = 16;
    /**
     * The infoType is typically used in Ireland.
     *
     * Generated from protobuf enum <code>IRELAND = 17;</code>
     */
    const IRELAND = 17;
    /**
     * The infoType is typically used in Israel.
     *
     * Generated from protobuf enum <code>ISRAEL = 18;</code>
     */
    const ISRAEL = 18;
    /**
     * The infoType is typically used in Italy.
     *
     * Generated from protobuf enum <code>ITALY = 19;</code>
     */
    const ITALY = 19;
    /**
     * The infoType is typically used in Japan.
     *
     * Generated from protobuf enum <code>JAPAN = 20;</code>
     */
    const JAPAN = 20;
    /**
     * The infoType is typically used in Kazakhstan.
     *
     * Generated from protobuf enum <code>KAZAKHSTAN = 47;</code>
     */
    const KAZAKHSTAN = 47;
    /**
     * The infoType is typically used in Korea.
     *
     * Generated from protobuf enum <code>KOREA = 21;</code>
     */
    const KOREA = 21;
    /**
     * The infoType is typically used in Mexico.
     *
     * Generated from protobuf enum <code>MEXICO = 22;</code>
     */
    const MEXICO = 22;
    /**
     * The infoType is typically used in the Netherlands.
     *
     * Generated from protobuf enum <code>THE_NETHERLANDS = 23;</code>
     */
    const THE_NETHERLANDS = 23;
    /**
     * The infoType is typically used in New Zealand.
     *
     * Generated from protobuf enum <code>NEW_ZEALAND = 41;</code>
     */
    const NEW_ZEALAND = 41;
    /**
     * The infoType is typically used in Norway.
     *
     * Generated from protobuf enum <code>NORWAY = 24;</code>
     */
    const NORWAY = 24;
    /**
     * The infoType is typically used in Paraguay.
     *
     * Generated from protobuf enum <code>PARAGUAY = 25;</code>
     */
    const PARAGUAY = 25;
    /**
     * The infoType is typically used in Peru.
     *
     * Generated from protobuf enum <code>PERU = 26;</code>
     */
    const PERU = 26;
    /**
     * The infoType is typically used in Poland.
     *
     * Generated from protobuf enum <code>POLAND = 27;</code>
     */
    const POLAND = 27;
    /**
     * The infoType is typically used in Portugal.
     *
     * Generated from protobuf enum <code>PORTUGAL = 28;</code>
     */
    const PORTUGAL = 28;
    /**
     * The infoType is typically used in Russia.
     *
     * Generated from protobuf enum <code>RUSSIA = 44;</code>
     */
    const RUSSIA = 44;
    /**
     * The infoType is typically used in Singapore.
     *
     * Generated from protobuf enum <code>SINGAPORE = 29;</code>
     */
    const SINGAPORE = 29;
    /**
     * The infoType is typically used in South Africa.
     *
     * Generated from protobuf enum <code>SOUTH_AFRICA = 30;</code>
     */
    const SOUTH_AFRICA = 30;
    /**
     * The infoType is typically used in Spain.
     *
     * Generated from protobuf enum <code>SPAIN = 31;</code>
     */
    const SPAIN = 31;
    /**
     * The infoType is typically used in Sweden.
     *
     * Generated from protobuf enum <code>SWEDEN = 32;</code>
     */
    const SWEDEN = 32;
    /**
     * The infoType is typically used in Switzerland.
     *
     * Generated from protobuf enum <code>SWITZERLAND = 43;</code>
     */
    const SWITZERLAND = 43;
    /**
     * The infoType is typically used in Taiwan.
     *
     * Generated from protobuf enum <code>TAIWAN = 33;</code>
     */
    const TAIWAN = 33;
    /**
     * The infoType is typically used in Thailand.
     *
     * Generated from protobuf enum <code>THAILAND = 34;</code>
     */
    const THAILAND = 34;
    /**
     * The infoType is typically used in Turkey.
     *
     * Generated from protobuf enum <code>TURKEY = 35;</code>
     */
    const TURKEY = 35;
    /**
     * The infoType is typically used in Ukraine.
     *
     * Generated from protobuf enum <code>UKRAINE = 45;</code>
     */
    const UKRAINE = 45;
    /**
     * The infoType is typically used in the United Kingdom.
     *
     * Generated from protobuf enum <code>UNITED_KINGDOM = 36;</code>
     */
    const UNITED_KINGDOM = 36;
    /**
     * The infoType is typically used in the United States.
     *
     * Generated from protobuf enum <code>UNITED_STATES = 37;</code>
     */
    const UNITED_STATES = 37;
    /**
     * The infoType is typically used in Uruguay.
     *
     * Generated from protobuf enum <code>URUGUAY = 38;</code>
     */
    const URUGUAY = 38;
    /**
     * The infoType is typically used in Uzbekistan.
     *
     * Generated from protobuf enum <code>UZBEKISTAN = 46;</code>
     */
    const UZBEKISTAN = 46;
    /**
     * The infoType is typically used in Venezuela.
     *
     * Generated from protobuf enum <code>VENEZUELA = 39;</code>
     */
    const VENEZUELA = 39;
    /**
     * The infoType is typically used in Google internally.
     *
     * Generated from protobuf enum <code>INTERNAL = 40;</code>
     */
    const INTERNAL = 40;

    private static $valueToName = [
        self::LOCATION_UNSPECIFIED => 'LOCATION_UNSPECIFIED',
        self::PBGLOBAL => 'GLOBAL',
        self::ARGENTINA => 'ARGENTINA',
        self::ARMENIA => 'ARMENIA',
        self::AUSTRALIA => 'AUSTRALIA',
        self::AZERBAIJAN => 'AZERBAIJAN',
        self::BELARUS => 'BELARUS',
        self::BELGIUM => 'BELGIUM',
        self::BRAZIL => 'BRAZIL',
        self::CANADA => 'CANADA',
        self::CHILE => 'CHILE',
        self::CHINA => 'CHINA',
        self::COLOMBIA => 'COLOMBIA',
        self::CROATIA => 'CROATIA',
        self::CZECHIA => 'CZECHIA',
        self::DENMARK => 'DENMARK',
        self::FRANCE => 'FRANCE',
        self::FINLAND => 'FINLAND',
        self::GERMANY => 'GERMANY',
        self::HONG_KONG => 'HONG_KONG',
        self::INDIA => 'INDIA',
        self::INDONESIA => 'INDONESIA',
        self::IRELAND => 'IRELAND',
        self::ISRAEL => 'ISRAEL',
        self::ITALY => 'ITALY',
        self::JAPAN => 'JAPAN',
        self::KAZAKHSTAN => 'KAZAKHSTAN',
        self::KOREA => 'KOREA',
        self::MEXICO => 'MEXICO',
        self::THE_NETHERLANDS => 'THE_NETHERLANDS',
        self::NEW_ZEALAND => 'NEW_ZEALAND',
        self::NORWAY => 'NORWAY',
        self::PARAGUAY => 'PARAGUAY',
        self::PERU => 'PERU',
        self::POLAND => 'POLAND',
        self::PORTUGAL => 'PORTUGAL',
        self::RUSSIA => 'RUSSIA',
        self::SINGAPORE => 'SINGAPORE',
        self::SOUTH_AFRICA => 'SOUTH_AFRICA',
        self::SPAIN => 'SPAIN',
        self::SWEDEN => 'SWEDEN',
        self::SWITZERLAND => 'SWITZERLAND',
        self::TAIWAN => 'TAIWAN',
        self::THAILAND => 'THAILAND',
        self::TURKEY => 'TURKEY',
        self::UKRAINE => 'UKRAINE',
        self::UNITED_KINGDOM => 'UNITED_KINGDOM',
        self::UNITED_STATES => 'UNITED_STATES',
        self::URUGUAY => 'URUGUAY',
        self::UZBEKISTAN => 'UZBEKISTAN',
        self::VENEZUELA => 'VENEZUELA',
        self::INTERNAL => 'INTERNAL',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            $pbconst =  __CLASS__. '::PB' . strtoupper($name);
            if (!defined($pbconst)) {
                throw new UnexpectedValueException(sprintf(
                        'Enum %s has no value defined for name %s', __CLASS__, $name));
            }
            return constant($pbconst);
        }
        return constant($const);
    }
}


