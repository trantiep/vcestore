<?php

namespace Spatie\SchemaOrg;

use \Spatie\SchemaOrg\Contracts\IntangibleContract;
use \Spatie\SchemaOrg\Contracts\PriceSpecificationContract;
use \Spatie\SchemaOrg\Contracts\StructuredValueContract;
use \Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * The price asked for a given offer by the respective organization or person.
 *
 * @see http://schema.org/UnitPriceSpecification
 *
 */
class UnitPriceSpecification extends BaseType implements IntangibleContract, PriceSpecificationContract, StructuredValueContract, ThingContract
{
    /**
     * An additional type for the item, typically used for adding more specific
     * types from external vocabularies in microdata syntax. This is a
     * relationship between something and a class that the thing is in. In RDFa
     * syntax, it is better to use the native RDFa syntax - the 'typeof'
     * attribute - for multiple types. Schema.org tools may have only weaker
     * understanding of extra types, in particular those defined externally.
     *
     * @param string|string[] $additionalType
     *
     * @return static
     *
     * @see http://schema.org/additionalType
     */
    public function additionalType($additionalType)
    {
        return $this->setProperty('additionalType', $additionalType);
    }

    /**
     * An alias for the item.
     *
     * @param string|string[] $alternateName
     *
     * @return static
     *
     * @see http://schema.org/alternateName
     */
    public function alternateName($alternateName)
    {
        return $this->setProperty('alternateName', $alternateName);
    }

    /**
     * This property specifies the minimal quantity and rounding increment that
     * will be the basis for the billing. The unit of measurement is specified
     * by the unitCode property.
     *
     * @param float|float[]|int|int[] $billingIncrement
     *
     * @return static
     *
     * @see http://schema.org/billingIncrement
     */
    public function billingIncrement($billingIncrement)
    {
        return $this->setProperty('billingIncrement', $billingIncrement);
    }

    /**
     * A description of the item.
     *
     * @param string|string[] $description
     *
     * @return static
     *
     * @see http://schema.org/description
     */
    public function description($description)
    {
        return $this->setProperty('description', $description);
    }

    /**
     * A sub property of description. A short description of the item used to
     * disambiguate from other, similar items. Information from other properties
     * (in particular, name) may be necessary for the description to be useful
     * for disambiguation.
     *
     * @param string|string[] $disambiguatingDescription
     *
     * @return static
     *
     * @see http://schema.org/disambiguatingDescription
     */
    public function disambiguatingDescription($disambiguatingDescription)
    {
        return $this->setProperty('disambiguatingDescription', $disambiguatingDescription);
    }

    /**
     * The interval and unit of measurement of ordering quantities for which the
     * offer or price specification is valid. This allows e.g. specifying that a
     * certain freight charge is valid only for a certain quantity.
     *
     * @param QuantitativeValue|QuantitativeValue[] $eligibleQuantity
     *
     * @return static
     *
     * @see http://schema.org/eligibleQuantity
     */
    public function eligibleQuantity($eligibleQuantity)
    {
        return $this->setProperty('eligibleQuantity', $eligibleQuantity);
    }

    /**
     * The transaction volume, in a monetary unit, for which the offer or price
     * specification is valid, e.g. for indicating a minimal purchasing volume,
     * to express free shipping above a certain order volume, or to limit the
     * acceptance of credit cards to purchases to a certain minimal amount.
     *
     * @param PriceSpecification|PriceSpecification[] $eligibleTransactionVolume
     *
     * @return static
     *
     * @see http://schema.org/eligibleTransactionVolume
     */
    public function eligibleTransactionVolume($eligibleTransactionVolume)
    {
        return $this->setProperty('eligibleTransactionVolume', $eligibleTransactionVolume);
    }

    /**
     * The identifier property represents any kind of identifier for any kind of
     * [[Thing]], such as ISBNs, GTIN codes, UUIDs etc. Schema.org provides
     * dedicated properties for representing many of these, either as textual
     * strings or as URL (URI) links. See [background
     * notes](/docs/datamodel.html#identifierBg) for more details.
     *
     * @param PropertyValue|PropertyValue[]|string|string[] $identifier
     *
     * @return static
     *
     * @see http://schema.org/identifier
     */
    public function identifier($identifier)
    {
        return $this->setProperty('identifier', $identifier);
    }

    /**
     * An image of the item. This can be a [[URL]] or a fully described
     * [[ImageObject]].
     *
     * @param ImageObject|ImageObject[]|string|string[] $image
     *
     * @return static
     *
     * @see http://schema.org/image
     */
    public function image($image)
    {
        return $this->setProperty('image', $image);
    }

    /**
     * Indicates a page (or other CreativeWork) for which this thing is the main
     * entity being described. See [background
     * notes](/docs/datamodel.html#mainEntityBackground) for details.
     *
     * @param CreativeWork|CreativeWork[]|string|string[] $mainEntityOfPage
     *
     * @return static
     *
     * @see http://schema.org/mainEntityOfPage
     */
    public function mainEntityOfPage($mainEntityOfPage)
    {
        return $this->setProperty('mainEntityOfPage', $mainEntityOfPage);
    }

    /**
     * The highest price if the price is a range.
     *
     * @param float|float[]|int|int[] $maxPrice
     *
     * @return static
     *
     * @see http://schema.org/maxPrice
     */
    public function maxPrice($maxPrice)
    {
        return $this->setProperty('maxPrice', $maxPrice);
    }

    /**
     * The lowest price if the price is a range.
     *
     * @param float|float[]|int|int[] $minPrice
     *
     * @return static
     *
     * @see http://schema.org/minPrice
     */
    public function minPrice($minPrice)
    {
        return $this->setProperty('minPrice', $minPrice);
    }

    /**
     * The name of the item.
     *
     * @param string|string[] $name
     *
     * @return static
     *
     * @see http://schema.org/name
     */
    public function name($name)
    {
        return $this->setProperty('name', $name);
    }

    /**
     * Indicates a potential Action, which describes an idealized action in
     * which this thing would play an 'object' role.
     *
     * @param Action|Action[] $potentialAction
     *
     * @return static
     *
     * @see http://schema.org/potentialAction
     */
    public function potentialAction($potentialAction)
    {
        return $this->setProperty('potentialAction', $potentialAction);
    }

    /**
     * The offer price of a product, or of a price component when attached to
     * PriceSpecification and its subtypes.
     * 
     * Usage guidelines:
     * 
     * * Use the [[priceCurrency]] property (with standard formats: [ISO 4217
     * currency format](http://en.wikipedia.org/wiki/ISO_4217) e.g. "USD";
     * [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies)
     * for cryptocurrencies e.g. "BTC"; well known names for [Local Exchange
     * Tradings
     * Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system)
     * (LETS) and other currency types e.g. "Ithaca HOUR") instead of including
     * [ambiguous
     * symbols](http://en.wikipedia.org/wiki/Dollar_sign#Currencies_that_use_the_dollar_or_peso_sign)
     * such as '$' in the value.
     * * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a
     * decimal point. Avoid using these symbols as a readability separator.
     * * Note that both
     * [RDFa](http://www.w3.org/TR/xhtml-rdfa-primer/#using-the-content-attribute)
     * and Microdata syntax allow the use of a "content=" attribute for
     * publishing simple machine-readable values alongside more human-friendly
     * formatting.
     * * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT
     * NINE' (U+0039)) rather than superficially similiar Unicode symbols.
     *
     * @param float|float[]|int|int[]|string|string[] $price
     *
     * @return static
     *
     * @see http://schema.org/price
     */
    public function price($price)
    {
        return $this->setProperty('price', $price);
    }

    /**
     * The currency of the price, or a price component when attached to
     * [[PriceSpecification]] and its subtypes.
     * 
     * Use standard formats: [ISO 4217 currency
     * format](http://en.wikipedia.org/wiki/ISO_4217) e.g. "USD"; [Ticker
     * symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for
     * cryptocurrencies e.g. "BTC"; well known names for [Local Exchange
     * Tradings
     * Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system)
     * (LETS) and other currency types e.g. "Ithaca HOUR".
     *
     * @param string|string[] $priceCurrency
     *
     * @return static
     *
     * @see http://schema.org/priceCurrency
     */
    public function priceCurrency($priceCurrency)
    {
        return $this->setProperty('priceCurrency', $priceCurrency);
    }

    /**
     * A short text or acronym indicating multiple price specifications for the
     * same offer, e.g. SRP for the suggested retail price or INVOICE for the
     * invoice price, mostly used in the car industry.
     *
     * @param string|string[] $priceType
     *
     * @return static
     *
     * @see http://schema.org/priceType
     */
    public function priceType($priceType)
    {
        return $this->setProperty('priceType', $priceType);
    }

    /**
     * The reference quantity for which a certain price applies, e.g. 1 EUR per
     * 4 kWh of electricity. This property is a replacement for
     * unitOfMeasurement for the advanced cases where the price does not relate
     * to a standard unit.
     *
     * @param QuantitativeValue|QuantitativeValue[] $referenceQuantity
     *
     * @return static
     *
     * @see http://schema.org/referenceQuantity
     */
    public function referenceQuantity($referenceQuantity)
    {
        return $this->setProperty('referenceQuantity', $referenceQuantity);
    }

    /**
     * URL of a reference Web page that unambiguously indicates the item's
     * identity. E.g. the URL of the item's Wikipedia page, Wikidata entry, or
     * official website.
     *
     * @param string|string[] $sameAs
     *
     * @return static
     *
     * @see http://schema.org/sameAs
     */
    public function sameAs($sameAs)
    {
        return $this->setProperty('sameAs', $sameAs);
    }

    /**
     * A CreativeWork or Event about this Thing.
     *
     * @param CreativeWork|CreativeWork[]|Event|Event[] $subjectOf
     *
     * @return static
     *
     * @see http://schema.org/subjectOf
     */
    public function subjectOf($subjectOf)
    {
        return $this->setProperty('subjectOf', $subjectOf);
    }

    /**
     * The unit of measurement given using the UN/CEFACT Common Code (3
     * characters) or a URL. Other codes than the UN/CEFACT Common Code may be
     * used with a prefix followed by a colon.
     *
     * @param string|string[] $unitCode
     *
     * @return static
     *
     * @see http://schema.org/unitCode
     */
    public function unitCode($unitCode)
    {
        return $this->setProperty('unitCode', $unitCode);
    }

    /**
     * A string or text indicating the unit of measurement. Useful if you cannot
     * provide a standard unit code for
     * <a href='unitCode'>unitCode</a>.
     *
     * @param string|string[] $unitText
     *
     * @return static
     *
     * @see http://schema.org/unitText
     */
    public function unitText($unitText)
    {
        return $this->setProperty('unitText', $unitText);
    }

    /**
     * URL of the item.
     *
     * @param string|string[] $url
     *
     * @return static
     *
     * @see http://schema.org/url
     */
    public function url($url)
    {
        return $this->setProperty('url', $url);
    }

    /**
     * The date when the item becomes valid.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $validFrom
     *
     * @return static
     *
     * @see http://schema.org/validFrom
     */
    public function validFrom($validFrom)
    {
        return $this->setProperty('validFrom', $validFrom);
    }

    /**
     * The date after when the item is not valid. For example the end of an
     * offer, salary period, or a period of opening hours.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $validThrough
     *
     * @return static
     *
     * @see http://schema.org/validThrough
     */
    public function validThrough($validThrough)
    {
        return $this->setProperty('validThrough', $validThrough);
    }

    /**
     * Specifies whether the applicable value-added tax (VAT) is included in the
     * price specification or not.
     *
     * @param bool|bool[] $valueAddedTaxIncluded
     *
     * @return static
     *
     * @see http://schema.org/valueAddedTaxIncluded
     */
    public function valueAddedTaxIncluded($valueAddedTaxIncluded)
    {
        return $this->setProperty('valueAddedTaxIncluded', $valueAddedTaxIncluded);
    }

}
