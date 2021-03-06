<?php

namespace Spatie\SchemaOrg;

use \Spatie\SchemaOrg\Contracts\EnumerationContract;
use \Spatie\SchemaOrg\Contracts\IntangibleContract;
use \Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * A diet restricted to certain foods or preparations for cultural, religious,
 * health or lifestyle reasons.
 *
 * @see http://schema.org/RestrictedDiet
 *
 */
class RestrictedDiet extends BaseType implements EnumerationContract, IntangibleContract, ThingContract
{
    /**
     * A diet appropriate for people with diabetes.
     *
     * @see http://schema.org/DiabeticDiet
     */
     const DiabeticDiet = 'http://schema.org/DiabeticDiet';

    /**
     * A diet exclusive of gluten.
     *
     * @see http://schema.org/GlutenFreeDiet
     */
     const GlutenFreeDiet = 'http://schema.org/GlutenFreeDiet';

    /**
     * A diet conforming to Islamic dietary practices.
     *
     * @see http://schema.org/HalalDiet
     */
     const HalalDiet = 'http://schema.org/HalalDiet';

    /**
     * A diet conforming to Hindu dietary practices, in particular, beef-free.
     *
     * @see http://schema.org/HinduDiet
     */
     const HinduDiet = 'http://schema.org/HinduDiet';

    /**
     * A diet conforming to Jewish dietary practices.
     *
     * @see http://schema.org/KosherDiet
     */
     const KosherDiet = 'http://schema.org/KosherDiet';

    /**
     * A diet focused on reduced calorie intake.
     *
     * @see http://schema.org/LowCalorieDiet
     */
     const LowCalorieDiet = 'http://schema.org/LowCalorieDiet';

    /**
     * A diet focused on reduced fat and cholesterol intake.
     *
     * @see http://schema.org/LowFatDiet
     */
     const LowFatDiet = 'http://schema.org/LowFatDiet';

    /**
     * A diet appropriate for people with lactose intolerance.
     *
     * @see http://schema.org/LowLactoseDiet
     */
     const LowLactoseDiet = 'http://schema.org/LowLactoseDiet';

    /**
     * A diet focused on reduced sodium intake.
     *
     * @see http://schema.org/LowSaltDiet
     */
     const LowSaltDiet = 'http://schema.org/LowSaltDiet';

    /**
     * A diet exclusive of all animal products.
     *
     * @see http://schema.org/VeganDiet
     */
     const VeganDiet = 'http://schema.org/VeganDiet';

    /**
     * A diet exclusive of animal meat.
     *
     * @see http://schema.org/VegetarianDiet
     */
     const VegetarianDiet = 'http://schema.org/VegetarianDiet';

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

}
